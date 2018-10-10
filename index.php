<?php require_once "config.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>html loginas</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="wrapper">
		<div class="logo">
			<img src="./assets/images/logo.png">
		</div>
		<div class="login-wrapper">
			<div class="tabs-wrapper">
				<a href="">Login</a>
				<a href="registration.php" class="disabled">Register</a>
			</div>
			<form class="form-wrapper" method="POST">
				<label>Elektroninis paštas</label>
				<input type="input" name="email" placeholder="Elektrotinis paštas" required="">
				<label>Slaptažodis</label>
				<input type="password" name="password" placeholder="Slaptažodis" required="">
				<button class="reg-submit" type="submit" name="submit" value="Prisijungti">Prisijungti</button>
				<?php include ('./actions/login_action.php')?>
			</form>
			<div class="social-wrapper">
				<a href="http://www.facebook.lt"><img src="./assets/images/facebook.png"></a>
				<a href="http://www.google.lt"><img src="./assets/images/google.png"></a>
			</div>
		</div>
	</div>
</body>
</html>