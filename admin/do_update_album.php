<?php

$id = $_POST['id'];
$code = $_POST['code'];
$album = $_POST['album'];
$copyright = $_POST['copyright'];
$month = $_POST['month'];
$year = $_POST['year'];

//print_r($_POST);

$album = addslashes($album);
$now = date('Y-m-d H:i:s');

$sql = "insert into newrelease (code, album, copyright, nr_month, nr_year,cdate) ";
$sql .= " values('$code', '$album', $copyright, $month, $year,'$now')";

$sql = "UPDATE newrelease set code='$code', album='$album', copyright=$copyright, nr_month = $month, nr_year = $year, udate='$now' where nr_id=$id";

//echo $sql; exit;

include('../dbconfig.php');
if ($stmt = $mysqli->prepare($sql)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: newrelease_new_album.php');

exit;

?>
