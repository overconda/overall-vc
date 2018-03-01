<?php
$copyright = $_POST['copyright'];


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
