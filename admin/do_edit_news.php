<?php
$id = $_POST['id'];

$data = $_POST;
//$data = json_decode($_POST, true);


$detail = htmlspecialchars($data['ed'], ENT_QUOTES);
$title = htmlspecialchars($data['title'],ENT_QUOTES);
$publish = $data['datepicker'];
if(strlen($publish)>0){
  $publish = str_replace('/','-', $publish);
}
$now = date('Y-m-d H:i:s');

include('../dbconfig.php');



$query = "UPDATE news set  title='$title', detail='$detail', date_publish = '$publish', date='$now' where news_id = $id";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: news_new.php');

 ?>
