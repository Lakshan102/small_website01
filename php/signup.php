<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('../php/header.php'); ?>
</head>
<body class="text">
    <div 
        style="
        padding-top:20px;
        padding-bottom:20px;
        ">
        <div style="
        margin-left: auto;
        margin-right: auto;
        padding-top: 20px; 
        padding-bottom: 20px; 
        text-align:center; 
        height:auto; 
        width:450px; 
        border:solid;
        border-radius:40px;
        ">
            <img src="../img/non.png" alt="logo" style="width: 200px; height:75px">
            <form action="../include/signup.inc.php" method="post">
                <h2>SIGN UP</h2>
                <label >User Name</label><br>
                <input type="text" name="uname" placeholder="Enter Username" required style="border-radius: 20px;text-align:center;"><br><br>

                <label >Email</label><br>
                <input type="email" name="email" placeholder="Enter email" required style="border-radius: 20px;text-align:center;"><br><br>

                <label >Password</label><br>
                <input type="password" name="pword" placeholder="Enter Password" required style="border-radius: 20px;text-align:center;"><br><br>

                <label >ReEnter password</label><br>
                <input type="password" name="pwordre" placeholder="Re Enter Pssword" required style="border-radius: 20px;text-align:center;"><br><br>

                <div class="butt">
                <input  type="submit" 
                style="
                width: 400px; 
                height:30px;
                border-radius: 20px;
                margin-bottom: 20px;
                background-color:blueviolet;
                color: aliceblue;" 
                value="Sign Up" name="submit">
                </div>
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"]=='emptyinput'){
                            echo '<div style="margin-left: auto; margin-right: auto; width: 400px; color:red; border:solid red;  border-radius: 40px;">Fill in the All field!</div>';
                        }
                        elseif($_GET["error"]=='invalidUsername'){
                            echo '<div style="margin-left: auto; margin-right: auto; width: 400px; color:red; border:solid red;  border-radius: 40px;">Invalid Username!</div>';
                        }
                        elseif($_GET["error"]=='invalidEmail'){
                            echo '<div style="margin-left: auto; margin-right: auto; width: 400px; color:red; border:solid red;  border-radius: 40px;">Invalid Email!</div>';
                        }
                        elseif($_GET["error"]=='passworddontmatch'){
                            echo '<div style="margin-left: auto; margin-right: auto; width: 400px; color:red; border:solid red;  border-radius: 40px;">Password not match!</div>';
                        }
                        elseif($_GET["error"]=='usernametaken'){
                            echo '<div style="margin-left: auto; margin-right: auto; width: 400px; color:red; border:solid red;  border-radius: 40px;">This username Already use!</div>';
                        }
                        elseif($_GET["error"]=='stmtfaild'){
                            echo '<div style="margin-left: auto; margin-right: auto; width: 400px; color:red; border:solid red;  border-radius: 40px;">Somthing Wrong!</div>';
                        }
                        elseif($_GET["error"]=='none'){
                            echo '<div style="margin-left: auto; margin-right: auto; width: 400px; color:blue; border:solid blue;  border-radius: 40px;">Account Created</div>';
                        }
                    }
                ?>
                <p>Already you have Account?<a class="links" href="http://localhost/bodima/php/login.php"> Log in Now</a></p>
            </form>
        </div>
    </div>

</body>
</html>