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
				<a href="index.php" class="disabled">Login</a>
				<a href="">Register</a>
			</div>
			<form class="form-wrapper" method="POST" action="./actions/registration_action.php">
				<label>Vartotojo vardas</label>
				<input type="text" name="username" placeholder="Vartotojo vardas" required="">
				<label>Elektroninis paštas</label>
				<input type="text" name="email" placeholder="Elektroninis paštas" required="">
				<label>Slaptažodis</label>
				<input type="password" name="password" placeholder="Slaptažodis" required="">
				<label>Slaptažodžio patvirtinimas</label>
				<input type="password" name="password_confirm" placeholder="Slaptažodžio patvirtinimas" required="">
				<label>Vardas</label>
				<input type="text" name="name" placeholder="Vardas" required="">
				<label>Pavardė</label>
				<input type="text" name="surname" placeholder="Pavardė" required="">
				<label>Amžius</label>
				<input type="text" name="age" placeholder="Amžius" required="">
				<label>Miestass</label>
				<select class="select" name="city" required="">
			<?php
			$cities = [
				'vln' => 'Vilnius',
				'kns' => 'Kaunas',
				'klpd' => 'Klaipėda',
				'pnvz' => 'Panevėžys'
			];
			?>
			<?php foreach ($cities as $key => $value) { ?>
				<option value="<?php echo "$value"; ?>">
					<?php echo "$value"; ?>
				</option>
			<?php
			}
			?>
			</select>
			<label>Lytis:</label>
			<div class="radio">
				<input type="radio" name="gender" value="Vyras" required=""> Vyras
				<input type="radio" name="gender" value="Moteris" required=""> Moteris 
			</div>
			<button class="reg-submit" type="submit" name="submit" value="Prisijungti">Registruotis</button>
		</form>
	</div>
	</div>
</body>
</html>