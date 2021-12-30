    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";

    Page::forceDashboard();
    require_once "inc/CDN.php";
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">
    <title>Register</title>
  </head>

  <body class="noScroll">

<a href="/Log-Reg-Site/index.php" class="d-flex justify-content-center mt-2">
	<img src="/Log-Reg-Site/img/brand.png" alt="LOGO" style="width:5em; height:5em;">
</a>

<!-- Card -->
<div class="container-fluid pt-2 mb-3" style="width: 25em;">
<div class="card round">

	<!-- Register form -->
	<div class="container-fluid mx-auto mt-5">
		<form class="js-register">
			<h2 class="pb-2"> Register </h2>
						<div class="col-sm" style="width: 20em;">
							<div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control form-control-sm" aria-describedby="emailHelp" placeholder="email@email.com" required="required">
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control form-control-sm" required="required" placeholder="your password" id="myPassword">
				</div>

				<div class="alert alert-danger js-error mt-2 mb-0" style="display: none;" role="alert"></div>
				
				<!-- An element to toggle between password visibility -->
				<input type="checkbox" onclick="myFunction()" class="mt-2"> Show Password<br>

				<button type="submit" class="btn btn-primary mt-1 log-reg-btn mb-3">Register</button>
			</div>
		</form>
	</div>

</div>
</div>

<div class="container-fluid d-flex flex-column align-items-center">
		<h6 class="line"><span class="txt"> Already have an Account? </span></h6>
		<a role="button" class="btn acc-btn" href="/Log-Reg-Site/login.php">Login</a>
</div>		


<?php require_once "inc/footer.php"; ?>
  </body>
</html>