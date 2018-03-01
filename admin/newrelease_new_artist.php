<?php
include_once('admin_functions.php');

drawAdminHeader();
?>

<section class="content-header">
  <h1>
    New Release
    <small>Add New Artist</small>
  </h1>
</section>

<section class="content">


<div class="row">
  <div class="col-md-8">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">เพิ่มชื่อศิลปิน</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="do_add_artist.php">
        <div class="box-body">

          <div class="form-group">
            <label for="artist_name">Artist</label>
            <input type="text" class="form-control" id="artist_name" name="artist_name" placeholder="พิมพ์ชื่อศิลปิน">
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

<div class="row">
  <div class="col-md-8">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">รายชื่อศิลปิน</h3>
      </div>
      <!-- /.box-header -->

      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>#</th>
            <th>รายชื่อ</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <?php

include_once('../dbconfig.php');
$query = "SELECT id,artist_name FROM artist ORDER by id DESC ";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result($id, $artist);
    $i=1;
    while ($stmt->fetch()) {
        //printf ("<tr>\n<td>%s</td><td>%s</td><td><a href='newrelease_edit_copyright.php?id=%s'>Edit</a></td><td><a href='newrelease_delete_copyright.php?id=%s'>X</a></td>\n</tr>%s (%s)\n", $id, $copyright,$id,$id);
        echo "<tr>";
        echo "  <td>$i</td>";
        echo "  <td>$artist</td>";
        echo "  <td align=right><a href='newrelease_edit_artist.php?id=$id'>Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);'  data-href='newrelease_delete_artist.php?id=$id' data-toggle=\"modal\" data-target=\"#confirm-delete\">X</a></td>";
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
  $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

      //console.log($(e.relatedTarget).data('href'));
  });

</script>
