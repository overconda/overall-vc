<?php


$id = $_GET['id'];


include('../dbconfig.php');

$query = "update copyright set active =0 where id = $id";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: newrelease_new_copyright.php');

 ?>
