<?php require_once "config.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mad Lamb</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<header>
		<div class="header-wrapper">
			<div class="header-logo">
				<a href="home.php"><img src="./assets/images/logo.png"></a>
			</div>
			<div class="header-login">
				<form class="header-login-form" method="POST">
					<label>Prisijunk!</label>
					<input class="reg-input" type="input" name="email" placeholder="Elektrotinis paštas" required="">
					<input class="reg-input" type="password" name="password" placeholder="Slaptažodis" required="">
					<input class="reg-submit" type="submit" name="submit" value="Prisijungti">
					<?php include ('./actions/login_action.php')?>
					<?php
					if (! empty($_SESSION["id"])){
						$sql = "SELECT * FROM useriai WHERE id = '" . $_SESSION["id"] . "' LIMIT 1" ;
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);                
            if(isset($_SESSION["id"])){
             	echo "<br>" . "Labas, " . $row['username'];
             }
           }
					?>
					<?php echo "<a href ='./actions/logout_action.php'>Logout</a>"?>
					</form>
				<a href="">Slaptažodžio priminimas</a>
				<a href="registration.php">Registruokis</a>				
			</div>
		</div>
	</header>
	<nav>
		<div class="nav-wrapper">
			<a href="">Komanda</a>
			<a href="">Tvarkaraštis</a>
			<a href="">Rezultatai</a>
			<a href="">Sezonai</a>
			<a href="">Kontaktai</a>
			<a href="allusers.php">Visi užsiregistravę vartotojai</a>
		</div>
	</nav>
</body>
</html>