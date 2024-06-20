<?php 
    if (isset($_POST["submit"])){ //anyone can  go this page using submit button only 
        $username = $_POST["uname"];//login page user will enter details get this page
        $email = $_POST["email"];
        $pwd = $_POST["pword"];
        $pwdRepeat = $_POST["pwordre"];

        require_once 'database.php'; //we can now variable in database.php file for this page
        require_once 'function.inc.php';//function page connect this page
        
        $emptyInputs = emptyInputSignup($username,$email,$pwd,$pwdRepeat);//check form is fill completely
        $invalidUsername = invalidUsername($username);
        $invalidEmail = invalidEmail($email);//chech usernam and email format is correct
        $pwdMatch = pwdMatch($pwd,$pwdRepeat);//chech pword and repeat pword is same
        $usernameExits = usernameExits($conn, $username); //chech username is unique

        if($emptyInputs != false){ //if input is empty then show error message
            header("Location:../php/signup.php?error=emptyinput");
            exit();
        }
        if($invalidUsername != false){ //if username is invalid then show error message
            header("Location:../php/signup.php?error=invalidUsername");
            exit();
        }
        if($invalidEmail != false){ //if email is invalid then show error message
            header("Location:../php/signup.php?error=invalidEmail");
            exit();
        }
        if($pwdMatch != false){ //if password and repeat password are not match then show error message
            header("Location:../php/signup.php?error=passworddontmatch");
            exit();
        }
        if($usernameExits != false){ //if username use another user then show error message
            header("Location:../php/signup.php?error=usernametaken");
            exit();
        }
        
        createUser($conn, $username, $email, $pwd);

    }else{//anyone use url ,he/she go again login page
        header('Location:../php/login.php');
        exit();
    }