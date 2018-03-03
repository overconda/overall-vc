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



if(!isset($_GET['id'])) header('Location: product_new.php');

include_once('../dbconfig.php');

$id= $_GET['id'];


$query = "update product set active=0 where product_id=$id";
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
