<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

echo "<pre>";

/*
print_r($data);
echo "<br />------<br />";
print_r($_FILES);
echo "</pre>";
exit;
*/

$cate_id = $data['cate'];
$subcate_id = '';
if(isset($data['subcate'])) $subcate_id = $data['subcate'];
$detail = htmlspecialchars($data['ed'], ENT_QUOTES);
$title = htmlspecialchars($data['title'],ENT_QUOTES);
$now = date('Y-m-d H:i:s');

$newfilename = "";
$uploads_dir = "images_uploaded";
/// file manipulate

if(isset($_FILES)){
  $fname = $_FILES['fthumb']['name'];
  $ftype = $_FILES['fthumb']['type'];
  $tmp_name = $_FILES['fthumb']['tmp_name'];

  define ('SITE_ROOT', realpath(dirname(__FILE__)));

  list($null,$ext) = explode('/',$ftype);
  $ext = strtolower($ext);
  if($ext=='jpeg') $ext = "jpg";

  $newfilename = $uploads_dir . '/' . date('YmdHis') . rand(100,999) . '.' . $ext;

  //$tmp_name = str_replace(' ', '\\ ', $tmp_name);
  $siteroot = SITE_ROOT;
  $siteroot = str_replace(' ', '\\ ', $siteroot);
  if(!move_uploaded_file($tmp_name, $siteroot . '/' . $newfilename)){
    echo "Can not upload image ...<br />";
    print_r(error_get_last());
    exit;
  }

}


$query = "insert into product (cate_id, subcate_id, title, detail,thumb, date) ";
$query .= " values($cate_id, '$subcate_id', '$title', '$detail', '$newfilename','$now')";


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
