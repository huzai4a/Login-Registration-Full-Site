    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";
    require_once "inc/CDN.php";
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Home page</title>
    <!-- displays back to top btn in footer -->
    <style>.footer-btn{display: block;}</style>
  </head>
    <body style="height:200em;">

    <!-- navbar -->
    <nav>
        <ul class="menu" id="top">
            <li class="logo"><a href="/Log-Reg-Site/index.php"><img src="/Log-Reg-Site/img/brand.png" alt="..." style="width:2em; height:2em;"></a></li>
            <li class="item"><a href="/Log-Reg-Site/index.php">Home</a></li>
            <li class="item"><a href="#">Features</a></li>
            <li class="item"><a href="#">Pricing</a></li>
            <li class="item button"><a href="/Log-Reg-Site/login.php">Login</a></li>
            <li class="item button secondary"><a href="/Log-Reg-Site/register.php">Sign Up</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>

<!-- Card -->
<div class="container-fluid pt-2 mb-3 animate" style="width: 25em;">
<div class="card round" style="height: 10em;">
    <div class="container-fluid mt-2">
        <h2> Dashboard </h2>
        <?php 
            echo "Today is "; 
            date_default_timezone_set("America/Toronto");
            echo date("F d, Y") . "<br>It is " . date("h i A");
        ?>
        <p>
            <a href="/Log-Reg-Site/login.php"> Login </a>
            <a href="/Log-Reg-Site/register.php"> Register </a>
        </p>

    </div>
 </div>
</div>

<?php require_once "inc/footer.php"; ?>
  </body>
</html>

