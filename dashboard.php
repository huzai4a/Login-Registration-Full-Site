<?php

    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";
    require_once "inc/CDN.php";
    Page::forceLogin();

    $User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <div class="container-fluid">
        <h2>Dashboard</h2>
        <p>
            Hello <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?>
        </p>
        <p><a href="logout.php">Logout</a></p>
    </div>

 <?php require_once "inc/footer.php"; ?>

  </body>
</html>