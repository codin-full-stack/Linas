<?php
if (! empty($_POST)) {
  $sql = "SELECT * FROM useriai WHERE email = '" . $_POST['email'] . "' LIMIT 1" ;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if(! empty($row)) {
    if ($row['password']== md5($_POST['password'])){
      $_SESSION["id"] = $row["id"];
      header('Location: profile.php');
      exit;
    } else {
      echo "Blogai ivestas slaptazodis";
    }} else {
      echo 'Tokio vartotojo nėra';
    }
  }
?>


