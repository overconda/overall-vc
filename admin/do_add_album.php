<?php

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

//echo $sql; exit;

include('../dbconfig.php');
if ($stmt = $mysqli->prepare($sql)) {

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
