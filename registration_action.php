<?php include ("main.php") ?>
<div class="congrats-text">
<?php
	if (isset($_POST) & !empty($_POST)){
		$_POST['password'] == $_POST['password_confirm'];
		unset($_POST['password_confirm']);
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$age = $_POST ['age'];
		$city = $_POST['city'];
		$gender = $_POST['gender'];

		$sql = "INSERT INTO useriai (username, email, password, name, surname, age, city, gender) VALUES ('$username', '$email', '$password', '$name', '$surname', '$age', '$city', '$gender')";
		
		if (mysqli_query($conn, $sql)) {
			echo "Sveikiname užsiregistravus sėkmingai!";
		} else {
			echo 'Užsiregistruoti nepavyko. Bandyk dar kartą.';
		}
	}
?>
</div>
<?php include ("footer.php") ?>
