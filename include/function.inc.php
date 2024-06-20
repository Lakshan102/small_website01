<?php
    
    function emptyInputSignup($username,$email,$pwd,$pwdRepeat){
        $results;
        if(empty($username) || empty($email) || empty($pwd) ||empty($pwdRepeat) ){
            $results = true;
        }else{
            $results = false;
        }
        return $results;
    }
    function invalidUsername($username){
        $results;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $results = true;
        }else{
            $results = false;
        }
        return $results;
    }
    function invalidEmail($email){
        $results;
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $results = true;
        }else{
            $results = false;
        }
        return $results;
    }
    function pwdMatch($pwd,$pwdRepeat){
        $results;
        if($pwd !== $pwdRepeat){
            $results = true;
        }else{
            $results = false;
        }
        return $results;
    }

    function usernameExits($conn, $username){
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../php/signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss" ,$username, $email);
        mysqli_stmt_execute($stmt);
        $resultData=mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            return false;
        }
        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $username, $email, $pwd){
        $sql = "INSERT INTO users (username,email,password) VALUE (?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../php/signup.php?error=stmtfailed");
            exit();
        }
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss" , $username, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:../php/login.php?error=none");
        exit();
    }
    function emptyInputLogin($username,$pwd){
        $results;
        if(empty($username) || empty($pwd) ){
            $results = true;
        }else{
            $results = false;
        }
        return $results;
    }

    function LoginUser($conn, $username,$pwd){
        $usernameExit=usernameExits($conn, $username);
        if($usernameExit === false){
            header("Location:../php/login.php?error=wronglogin");
            exit();
        }
        $pwdhashed = $usernameExit["password"];
        $checkPwd = password_verify($pwd, $pwdhashed);

        if($checkPwd === false){
            header('Location:../php/signup.php?error=wrongLogin');
            exit();
        }else if($checkPwd === true){
            session_start();
            $_SESSION["userid"]=$usernameExit["id"];
            $_SESSION["username"]=$usernameExit["username"];
            
            header("Location: ../php/index.php");
            exit();
        }
    }