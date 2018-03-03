<?php


$username = $_POST['vcusername'];
$password = $_POST['password'];

include('../dbconfig.php');
setcookie('admin', '');

$pwd='';
$query = "select password, username from user where username = '$username' limit 1";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_row()) {
      //var_dump($row);
      echo "<br />";
      $dbpwd = $row[0];

      $result->close();


      $md5 = md5($password);

      //echo "[$dbpwd][$md5]";exit;
      if($md5==$dbpwd){
        //$_SESSION['admin'] = 'yes';
        setcookie('admin', 'yes');
        header('Location: index.php');
        exit;
      }else{
        //$_SESSION['error'] = "wrong";
        setcookie('admin', 'denied');
        header('Location: login.php');
        exit;
      }
    }

}


header('Location: login.php?dberror');








 ?>
