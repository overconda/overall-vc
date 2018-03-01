<?php
$id = $_POST['id'];
$copyright = $_POST['copyright'];


include('../dbconfig.php');


$query = "UPDATE copyright set copyright = '$copyright' where id = $id";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: newrelease_new_copyright.php');

 ?>
