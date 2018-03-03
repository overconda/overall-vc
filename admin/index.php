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



include_once('../dbconfig.php');
include_once('admin_functions.php');

drawAdminHeader();
?>

<link rel="stylesheet" href="bootstrap-datetimepicker.css">
<style>
  #editor-container {
    height: 350px;
  }
</style>

<section class="content-header">
  <h1>
    Admin
  </h1>
</section>

<section class="content">


<div class="row">
  <div class="col-md-12">
    <div class="center-thing">

      <img src="../images/vc_big_logo.png" />
    </div>
  </div>
</div>




</section>

<?php
drawAdminFooter();
 ?>
<style>
.center-thing img{
  margin-left: auto;
  margin-right: auto;
  display: block;
}

</style>
