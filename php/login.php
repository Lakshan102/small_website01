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
                <h2>LOG IN</h2>
                <label >User Name</label><br>
                <input type="text" name="uname" placeholder="Enter Username" required style="border-radius: 20px;text-align:center;"><br><br>

                <label >Password</label><br>
                <input type="password" name="pword" placeholder="Enter Password" required style="border-radius: 20px;text-align:center;"><br><br>
                <input type="submit" 
                style="
                width: 400px; 
                height:30px;
                border-radius: 20px;
                margin-bottom: 20px;
                background-color:blueviolet;
                color: aliceblue;" 
                value="Log in" name="submit">
                <p>Don't have account? <a class="links" href="http://localhost/bodima/php/signup.php">Sign Up Now</a></p>
            </form>
        </div>
    </div>

</body>
</html>