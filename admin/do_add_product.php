<?php

include('../dbconfig.php');



$data = $_POST;
//$data = json_decode($_POST, true);


$cate_id = $data['cate'];
$subcate_id = '';
if(isset($data['subcate'])) $subcate_id = $data['subcate'];
$detail = htmlspecialchars($data['ed'], ENT_QUOTES);
$title = htmlspecialchars($data['title'],ENT_QUOTES);
$now = date('Y-m-d H:i:s');

$query = "insert into product (cate_id, subcate_id, title, detail, date) ";
$query .= " values($cate_id, '$subcate_id', '$title', '$detail', '$now')";


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
