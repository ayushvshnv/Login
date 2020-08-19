<?php
require_once 'config.php';
if (isset($_SESSION['userData'])) {
	header('location: view.php');
}
$loginURL = "";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login & Registration with google using Php </title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

	<!-- Simple Login -->
	<div class="login-box" style="margin: 75px;">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<h3>Login</h3>
					<form action="login_one.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" name="submit" class="btn btn-primary"> Login </button>
					</form>
				</div>

				<div class="col-sm" style="margin-top: 50;">
					<h3>Register</h3>
					<form action="registration_one.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" name="submit" class="btn btn-primary"> Register </button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="login-box">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<p style="font-size: 70px;">
						<b> OR </b>
					</p>
					<a href="<?= htmlspecialchars($loginURL); ?>"><img src="assets/image/Google.png" class="fbbutton" alt="Login With Google"></a>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Google Login -->
	<section class="main">
		<div class="inner">
			<p class="inner_p" style="font-size: 70px;">
				<b> OR <br> SIGN-IN WITH</b>
			</p>
			<a href="<?= htmlspecialchars($loginURL); ?>"><img src="assets/image/Google.png" alt="Login With Google"></a>
		</div>
	</section>

</body>

</html>