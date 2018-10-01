<!DOCTYPE html>
<html>
<head>
	<title>Registracija</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/registration.css">
</head>
<?php include ('main.php') ?>
<body>
	<div class="registration-wrapper">
	<form class="registration-form" method="POST" action="registration_action.php">
		<h2>Registracija</h2>
		<input class="input" type="text" name="username" placeholder="Vartotojo vardas" required="">
		<input class="input" type="text" name="email" placeholder="Elektroninis paštas" required="">
		<input class="input" type="password" name="password" placeholder="Slaptažodis" required="">
		<input class="input" type="password" name="password_confirm" placeholder="Slaptažodžio patvirtinimas" required="">
		<label class="emty_label"></label>
		<input class="input" type="text" name="name" placeholder="Vardas" required="">
		<input class="input" type="text" name="surname" placeholder="Pavardė" required="">
		<input class="input" type="text" name="age" placeholder="Amžius" required="">
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
		<label class="reg-label">Lytis:</label>
		<div class="radio">
			<input type="radio" name="gender" value="Vyras" required=""> Vyras
			<input type="radio" name="gender" value="Moteris" required=""> Moteris 
		</div>
			<input class="submit" type="submit" value="Registruotis">
	</form>
	</div>
</body>
</html>