<!DOCTYPE html>
<html>
<head>
	<title>Visi vartotojai</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<?php include ('main.php') ?>
<body>
		<div class="allusers">
<?php
echo '<h1>Registruoti vartotojai:</h1>';

$sql = "SELECT * FROM useriai";
$result = mysqli_query($conn, $sql);

	echo "<table>";
	echo "<thead>";
	echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Vartotojo slapyvardis</th>";
		echo "<th>El.paštas</th>";
		echo "<th>Vardas</th>";
		echo "<th>Pavardė</th>";
		echo "<th>Amžius</th>";
		echo "<th>Miestas</th>";
		echo "<th>Lytis</th>";
	echo "</tr>";
	echo "</thead>";
	
	echo "<tbody>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['surname'] . "</td>";
			echo "<td>" . $row['age'] . "</td>";
			echo "<td>" . $row['city'] . "</td>";
			echo "<td>" . $row['gender'] . "</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
?>
</div>
</body>
</html>