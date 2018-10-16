<?php require_once "config.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mad Lamb</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/mobile.css">
	<script src="script.js" async=""></script>
</head>
<body>
	<header>
		<div class="header-wrapper">
			<div class="header-logo">
				<a href="home.php"><img src="./assets/images/logo.png"></a>
			</div>
			<div class="now-time"></div>
			<div class="left-time"></div>
			<div class="header-login">
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
			<a href="html">HTML'ai</a>
			<a href="allusers.php">Visi užsiregistravę vartotojai</a>
		</div>
	</nav>