<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('../php/header.php'); ?>
</head>
<body class="text">
    <!--*******************nav bar*****************-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
      <div class="container">
        <img src="../img/black.png" alt="logo" style="width: 210px; height: 70px; "></img>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item ms-3">
                    <a class="nav-link" href="http://localhost/bodima/php/index.php">Home</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="http://localhost/bodima/php/acc.php">Account Details</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="http://localhost/bodima/php/member.php">Members</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#">Other</a>
                    
                </li>
                
                    <?php 
                        if(isset($_SESSION["username"])){
                            echo '<li class="nav-item ms-3" ><a  class="nav-link" href="profile.php">'.$_SESSION["username"].'</a></li>';
                            echo '<li class="nav-item ms-3" ><a  class="nav-link" href="../include/logout.inc.php">LOGOUT</a></li>';
                        }else{
                            echo '<li class="nav-item ms-3" ><a class="nav-link" href="login.php">LOGIN</a></li>';
                        }
                    ?>
                
                
                
                
                
            </ul>
        </div>
      </div>
    
  </nav>
            
    <!--*******************nav bar*****************-->

    <!--******************hero section*****************-->
    <div id="hero" class="col-12 min-vh-100 text-center align-items-center" >
        
        <h1 class="hero-text">Welcome Thibirigasyaya Our Boarding House</h1>
        <h3 style="padding-top: 50px; color: #efe0e0;">This is Our place</h3>
        
    </div>
    <div class="container">
        <h1><b>Come and see our house</b></h1>
        <a id="b1" type="button" name="location" href="https://goo.gl/maps/kKGUKsnm9VLVcoRg8" class="btn">Location</a>
    </div>
    <!--******************hero section*****************-->

    <!--******************footer section*****************-->
        <?php require_once('../php/footer.php'); ?>
    <!--******************footer section*****************-->
</body>
</html>
