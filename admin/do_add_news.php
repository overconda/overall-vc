<?php
///////// Check Login Section /////////

if(!isset($_COOKIE['admin'])){
  header('Location: login.php');
}else{
  if($_COOKIE['admin'] != 'yes'){
    header('Location: login.php');
  }
}
///////// End Check Login Section /////////



include('../dbconfig.php');



$data = $_POST;
//$data = json_decode($_POST, true);

$detail = htmlspecialchars($data['ed'], ENT_QUOTES);
$title = htmlspecialchars($data['title'],ENT_QUOTES);
$publish = $data['datepicker'];
if(strlen($publish)>0){
  $publish = str_replace('/','-', $publish);
}
$now = date('Y-m-d H:i:s');

$query = "insert into news ( title, detail, date_publish, date) ";
$query .= " values('$title', '$detail','$publish', '$now')";


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
