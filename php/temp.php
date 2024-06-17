<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('../php/header.php'); ?>
</head>
<body class="text">
    <div style="padding-top: 120px;">
        <div id="signup">
            <img src="../img/non.png" alt="logo" style="width: 200px; height:75px">
            <form >
                <h2>SIGN UP</h2>
                <label >User Name</label><br>
                <input type="text" name="uname" placeholder="Enter Username" required style="border-radius: 20px;text-align:center;"><br><br>

                <label >Email</label><br>
                <input type="email" name="email" placeholder="Enter email" required style="border-radius: 20px;text-align:center;"><br><br>

                <label >Password</label><br>
                <input type="password" name="pword" placeholder="Enter Password" required style="border-radius: 20px;text-align:center;"><br><br>

                <label >ReEnter password</label><br>
                <input type="password" name="pword-re" placeholder="Re Enter Pssword" required style="border-radius: 20px;text-align:center;"><br><br>

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

                <p>Already you have Account?<a class="links" href="http://localhost/bodima/php/login.php"> Log in Now</a></p>
            </form>
        </div>
    </div>

</body>
</html>