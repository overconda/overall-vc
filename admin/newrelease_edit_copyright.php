<?php
include_once('admin_functions.php');

drawAdminHeader();
?>

<section class="content-header">
  <h1>
    New Release
    <small>Add New Copyright</small>
  </h1>
</section>

<section class="content">


<div class="row">
  <div class="col-md-8">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">แก้ไขชื่อบริษัทลิขสิทธิ์</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <?php
      include_once('../dbconfig.php');
      $id = $_GET['id'];
      $copyright = "";

      $query = "SELECT copyright FROM copyright where id = $id";
      if ($stmt = $mysqli->prepare($query)) {

          $stmt->execute();
          $result = $stmt->get_result();

          //print_r($result);
          while ($row = $result->fetch_array(MYSQLI_NUM))
          {
              foreach ($row as $r)
              {
                  $copyright = $r;
              }
              //print "\n";
          }
          $stmt->close();
      }

       ?>

      <form role="form" method="post" action="do_edit_copyright.php">
        <div class="box-body">

          <div class="form-group">
            <label for="artist">Copyright</label>
            <input type="text" class="form-control" id="copyright" name="copyright" placeholder="พิมพ์ชื่อบริษํทลิขสิทธิ์" value="<?php echo $copyright;?>">
            <input type="hidden" name="id" value="<?php echo $id;?>">
          </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>


    </div>
  </div>
</div>


</section>

<?php
drawAdminFooter();
 ?>
