<?php


$id = $_GET['id'];


include('../dbconfig.php');

$query = "delete from copyright where id = $id";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: newrelease_new_copyright.php');

 ?>
