<?php


$id = $_GET['id'];


include('../dbconfig.php');

$query = "delete from newrelease where nr_id = $id";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: newrelease_new_album.php');

 ?>
