<?php
$copyright = $_POST['copyright'];
///////// Check Login Section /////////

if(!isset($_COOKIE['admin'])){
  header('Location: login.php');
}else{
  if($_COOKIE['admin'] != 'yes'){
    header('Location: login.php');
  }
}
///////// End Check Login Section /////////




include('../dbconfig.php');


$query = "insert into copyright (copyright) values('$copyright')";
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
