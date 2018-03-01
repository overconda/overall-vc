<?php
include_once('admin_functions.php');

drawAdminHeader();
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


<section class="content-header">
  <h1>
    New Release
    <small>Add New</small>
  </h1>
</section>

<section class="content">


<div class="row">
  <div class="col-md-8">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">เพิ่มอัลบั้มใหม่</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->


      <style type="text/css">
      #bootstrapSelectForm .selectContainer .form-control-feedback {
          /* Adjust feedback icon position */
          right: -15px;
      }
      </style>


      <!--<form role="form" action="do_add_album.php" id="bootstrapSelectForm">-->
      <form role="form"  id="bootstrapSelectForm" method="post" action="do_add_album.php">
        <div class="box-body">

          <div class="form-group">
            <label for="artist">Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="พิมพ์ Code">
          </div>

          <div class="form-group">
            <label for="album">อัลบั้ม</label>
            <input type="text" class="form-control" id="album" name="album" placeholder="พิมพ์ชื่ออัลบั้ม">
          </div>

          <div class="form-group selectContainer">
            <label>ศิลปิน</label> [<i><a href="newrelease_new_artist.php">จัดการศิลปิน</a></i>]
            <br />
            <select class="form-control"   name="artist">
              <option value=''>
                ---- เลือกศิลปิน ----
              </option>
              <?php
              include_once("../dbconfig.php");


              $query = "SELECT id,artist_name FROM artist order by id desc";
              if ($stmt = $mysqli->prepare($query)) {

                  $stmt->execute();
                  //$result = $stmt->get_result();


                  $stmt->bind_result($id, $artist_name);

                  while ($stmt->fetch()) {
                      echo "<option value=$id>$artist_name</option>\n";
                  }
                  $stmt->close();
              }
               ?>
            </select>
          </div>

          <div class="form-group selectContainer">
            <label>ลิขสิทธิ์</label> [<i><a href="newrelease_new_copyright.php">จัดการบริษัทลิขสิทธิ์</a></i>]
            <br />
            <select class="form-control"   name="copyright">
              <option value=''>
                ---- เลือกบริษัทลิขสิทธิ์ ----
              </option>
              <?php
              include_once("../dbconfig.php");


              $query = "SELECT id,copyright FROM copyright order by id desc";
              if ($stmt = $mysqli->prepare($query)) {

                  $stmt->execute();
                  //$result = $stmt->get_result();


                  $stmt->bind_result($id, $cp);

                  while ($stmt->fetch()) {
                      //printf ("%s (%s)\n", $name, $code);
                      echo "<option value=$id>$cp</option>\n";
                  }

                  //print_r($result);
                  /*
                  while ($row = $result->fetch_array(MYSQLI_NUM))
                  { /*
                      f$stmt->bind_result($name, $code);

                      while ($stmt->fetch()) {
                          printf ("%s (%s)\n", $name, $code);
                      }
                      //print "\n";
                      print_r($row);
                      $id = $row['id'];
                      $cp = $row['copyright'];
                      echo "<option value=$id>$cp</option>\n";
                  }
                  */
                  $stmt->close();
              }
               ?>
            </select>
          </div>

          <div class="row">

            <?php
            $month = array(
              1 => 'มกราคม',
              2 => 'กุมภาพันธ์',
              3 => 'มีนาคม',
              4 => 'เมษายน',
              5 => 'พฤษภาคม',
              6 => 'มิถุนายน',
              7 => 'กรกฎาคม',
              8 => 'สิงหาคม',
              9 => 'กันยายน',
              10 => 'ตุลาคม',
              11 => 'พฤศจิกายน',
              12 => 'ธันวาคม'
            )
             ?>
            <div class="col-md-3">
              <div class="form-group">
                <label>เดือน</label>
                <select class="form-control" name="month">
                  <?php
                  for($i = 1; $i<=12; $i++){
                    $thisMonth = date('m');
                    $selected = "";
                    if ($thisMonth == $i) $selected = "selected";
                    echo "<option value=$i $selected>" . $month[$i] . "</option>";
                  }
                   ?>
                </select>
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label>ปี</label>
                <select class="form-control" name="year">
                  <?php
                  $year = date('Y')+543;
                  for($i=$year; $i>=2550; $i--){
                    echo "<option value=$i>$i</option>";
                  }
                   ?>
                </select>
              </div>
            </div>
          </div>


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">รายชื่ออัลบั้ม</h3>
      </div>
      <!-- /.box-header -->

      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>#</th>
            <th>เดือน/ปี</th>
            <th>Code</th>
            <th>อัลบั้ม</th>
            <th>ศิลปิน</th>
            <th>ลิขสิทธิ์</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <?php

include_once('../dbconfig.php');
$query = "SELECT nr_id as id, code , album ,artist.artist_name ,copyright.copyright, nr_year as y , nr_month as m FROM newrelease";
$query .= " inner join copyright on newrelease.copyright = copyright.id ";
$query .= " inner join artist on newrelease.artist_id = artist.id ";
$query .= " ORDER by y, m DESC ";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result($id, $code, $album, $artist_name, $copyright, $y, $m);
    $i=1;
    while ($stmt->fetch()) {
        //printf ("<tr>\n<td>%s</td><td>%s</td><td><a href='newrelease_edit_copyright.php?id=%s'>Edit</a></td><td><a href='newrelease_delete_copyright.php?id=%s'>X</a></td>\n</tr>%s (%s)\n", $id, $copyright,$id,$id);


        $sMonth = $month[$m];
        echo "<tr>";
        echo "  <td>$i</td>";
        echo "  <td>$sMonth $y</td>";
        echo "  <td>$code</td>";
        echo "  <td>$album</td>";
        echo "  <td>$artist_name</td>";
        echo "  <td>$copyright</td>";
        echo "  <td align=right><a href='newrelease_edit_album.php?id=$id'>Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);'  data-href='newrelease_delete_album.php?id=$id' data-toggle=\"modal\" data-target=\"#confirm-delete\">X</a></td>";
        echo "</tr>";
        $i++;
    }

    $stmt->close();
}

           ?>
          </tbody>
        </table>
      </div>


    </div>
  </div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>ยืนยันการลบข้อมูล</h2>
            </div>
            <div class="modal-body">
                หากยืนยันที่จะลบข้อมูล ให้กด Delete ได้เลยครับ
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>



</section>



<?php
drawAdminFooter();
 ?>
 <script>
 $(document).ready(function() {
     $('#bootstrapSelectForm')
         .find('[name="copyright"]')
             .selectpicker()
             .change(function(e) {
                 $('#bootstrapSelectForm').formValidation('revalidateField', 'copyright');
             })
             .end()
         .formValidation({
             framework: 'bootstrap',
             excluded: ':disabled',
             icon: {
                 valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
             },
             fields: {
                 copyright: {
                     validators: {
                         notEmpty: {
                             message: 'Please select copyright.'
                         }
                     }
                 }
             }
         });
 });
 </script>
 <script>
   $('#confirm-delete').on('show.bs.modal', function(e) {
       $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

       //console.log($(e.relatedTarget).data('href'));
   });

 </script>
