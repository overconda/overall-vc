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



$id = $_POST['id'];

$data = $_POST;
//$data = json_decode($_POST, true);


$cate_id = $data['cate'];
$subcate_id = '';
if(isset($data['subcate'])) $subcate_id = $data['subcate'];
$detail = htmlspecialchars($data['ed'], ENT_QUOTES);
$title = htmlspecialchars($data['title'],ENT_QUOTES);
$now = date('Y-m-d H:i:s');

include('../dbconfig.php');



$query = "UPDATE product set cate_id = '$cate_id', subcate_id='$subcate_id', title='$title', detail='$detail', date='$now' where product_id = $id";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->close();
}


header('Location: product_new.php');

 ?>
