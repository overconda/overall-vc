<?php


$id = $_GET['id'];


include('../dbconfig.php');

$query = "update newrelease set active=0 where nr_id=$id";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: newrelease_new_album.php');

 ?>
