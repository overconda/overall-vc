<?php
if(!isset($_GET['id'])) header('Location: product_new.php');

include_once('../dbconfig.php');

$id= $_GET['id'];


$query = "update news set active=0 where news_id=$id";
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
