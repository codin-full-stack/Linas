<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
if (! empty($_POST)) {
  $sql = "SELECT * FROM useriai WHERE email = '" . $_POST['email'] . "' LIMIT 1" ;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if(! empty($row)) {
    if ($row['password']== md5($_POST['password'])){
      $_SESSION["id"] = $row["id"];
      header('Location: home.php');
      exit;
    } else {
      ?>
      <div class="error-message">
      <?php
      echo "Blogas slaptažodis :(";
      ?>
      </div>
      <?php
    }} else {
      ?>
      <div class="error-message">
      <?php
      echo 'Tokio vartotojo nėra';
      ?>
      </div>
      <?php
    }
  }
?>
</body>
</html>



