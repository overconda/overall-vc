<?php
///////// Check Login Section /////////

if(!isset($_COOKIE['admin'])){
  header('Location: login.php');
}else{
  if($_COOKIE['admin'] != 'yes'){
    header('Location: login.php');
  }
}
///////// End Check Login Section /////////



$artist_name = $_POST['artist_name'];


include('../dbconfig.php');


$query = "insert into artist (artist_name) values('$artist_name')";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}

if(!empty($_SERVER['HTTP_REFERER'])){
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
  header('Location: index.php');
}
exit;
 ?>
