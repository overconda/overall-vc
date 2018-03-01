<?php
include_once('admin_functions.php');

drawAdminHeader();
?>

<section class="content-header">
  <h1>
    New Release
    <small>Add New</small>
  </h1>
</section>

<section class="content">



  <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">เพิ่มเพลงใหม่</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="do_add_newrelease.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="songcode">รหัส</label>
                    <input type="text" class="form-control" id="songcode" name="songcode" placeholder="พิมพ์รหัส">
                  </div>
                  <div class="form-group">
                    <label for="albumname">อัลบั้ม</label>
                    <input type="text" class="form-control" id="albumname" name="albumname" placeholder="พิมพ์ชื่ออัลบั้ม">
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>ศิลปิน</label> [<a href="newrelease_new_artist.php">เพิ่มศิลปิน</a>]
                        <select class="form-control select2 select2-hidden-accessible w70" tabindex="-1" aria-hidden="true" name="artist">
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>ลิขสิทธิ์</label> [<a href="newrelease_new_copyright.php">เพิ่มลิขสิทธิ์</a>]
                        <select class="form-control select2 select2-hidden-accessible w70" tabindex="-1" aria-hidden="true" name="copyright">
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
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

</section>

<?php
drawAdminFooter();
 ?>
