<?php 
    if (isset($_POST["submit"])){ //anyone can  go this page using submit button only 
        $username = $_POST["uname"];//login page user will enter details get this page
        $pwd = $_POST["pword"];

        require_once 'database.php'; //we can now variable in database.php file for this page
        require_once 'function.inc.php';//function page connect this page

        if(emptyInputlogin($username,$pwd) != false){ //loging form is not fill
            header('Location:../php/login.php?error=emptyinput');
            exit();
        }
        LoginUser($conn , $username,$pwd);

    }else{//anyone use url ,he/she go again login page
        header('Location:../php/login.php');
        exit();
    }