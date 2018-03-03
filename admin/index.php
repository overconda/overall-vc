<?php
///////// Check Login Section /////////

if(!isset($_COOKIE['admin'])){
  echo "no cookie";
  //header('Location: login.php');
}else{
  echo "have cookie";
  if($_COOKIE['admin'] != 'yes'){
    echo "<br />but not yes";
    //header('Location: login.php');
  }
}
///////// End Check Login Section /////////


echo "<br />this is admin";
echo "<br />[" . $_COOKIE['admin'] . "]";
 ?>
