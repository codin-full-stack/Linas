
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
				<a href="home.php"><img src="https://www.codeacademy.lt/wp-content/uploads/2017/05/logo.png"></a>
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
             	echo "<br>" . "Labas, " . "<a href ='profile.php'> <strong>" . $row['username'] . "</strong></a>" ;
             }
           }
					?>
					<?php echo "<a href ='./actions/logout_action.php'>Logout</a>"?>	
			</div>
		</div>
	</header>
	<nav>
		<div class="nav-wrapper">
			<?php include ('menu.php') ?>
			<!-- <a href="html/calculator.html">Skaičiuotuvas</a>
  		<a href="html/table.html">Lentelė</a>
  		<a href="html/login.html">Loginas</a>
  		<a href="html/registration.html">Registracija</a>
  		<a href="html/portfolio">Portfolio</a>
  		<a href="allusers.php">Visi užsiregistravę vartotojai</a> -->
		</div>
	</nav>