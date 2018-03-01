<?php
include_once('../dbconfig.php');
include_once('admin_functions.php');

drawAdminHeader();
?>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.5/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.3.5/quill.core.css" rel="stylesheet">

<style>
  #editor-container {
    height: 350px;
  }
</style>

<section class="content-header">
  <h1>
    New Product
    <small>Add New Product</small>
  </h1>
</section>

<section class="content">


<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">เพิ่มสินค้า</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="do_add_product.php" id="form">
        <div class="box-body">

          <div class="form-group">
            <label for="title">ชื่อสินค้า</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="พิมพ์ชื่อสินค้า">
          </div>

          <div class="form-group">
            <label for="cate">หมวดหมู่</label>
            <select name="cate" class="form-control" id="cate">
              <<option value="">--- เลือกหมวดหมู่ ---</option>
              <?php

              $CATE = array();

              $query = "select cate_id, cate_name from product_cate order by cate_id";


              if ($stmt = $mysqli->prepare($query)) {

                  $stmt->execute();

                  $stmt->bind_result($id, $name);
                  $i=1;
                  while ($stmt->fetch()) {
                      echo "\n<option value=$id>" . $name;
                      echo "</option>";
                      //$i++;
                      $CATE[$id] = $name;
                  }

                  $stmt->close();
              }
               ?>

            </select>
          </div>



          <div class="form-group">
            <label for="subcate">หมวดหมู่ย่อย</label>
            <select name="subcate" class="form-control" id="subcate">
              <<option value="">--- เลือกหัวข้อย่อย ---</option>
              <?php
              $query = "select subcate_id, cate_id, subcate_name from product_subcate order by subcate_id";

              $SUBCATE = array();

              if ($stmt = $mysqli->prepare($query)) {

                  $stmt->execute();

                  $stmt->bind_result($id, $mainid, $name);
                  $i=1;
                  while ($stmt->fetch()) {
                      //echo "\n<option value=$id data-tag=$mainid>" . $name;
                      //echo "</option>";
                      //$i++;

                      $SUBCATE[$mainid][$id]['subcate'] = $name;
                      echo "\n<option value='$id' data-chained='$mainid'>$name";

                      echo "</option>";
                  }

                  $stmt->close();
              }

              //print_r($CATE);
              //print_r($SUBCATE);


               ?>

            </select>
          </div>

          <script>
          $(document).ready(function(){
            $('#subcate').find('option').hide();
          });




          $(document).ready(function(){
            $('#cate').on('change', function() {
              var selected = this.value;
              $("#subcate option").each(function(item){
          			var element =  $(this) ;
          			if (element.data("tag") != selected){
          				element.hide() ;
          			}else{
          				element.show();
          			}
        		}) ;
            })
          });

          </script>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">รายละเอียด
              </h3>

            </div>
            <!-- /.box-header -->


            <!--- EDITOR -->
            <input type="hidden" name="ed" id="ed" />
      			<div id="editor">

      				<h1>Hello world!</h1>
      				<h1>Hello world!</h1>
      				<p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>

      			</div>

            <!---// EDITOR -->


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
            <th>รายการ</th>
            <th>หมวดหมู่</th>
            <th>หมวดย่อย</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <?php


$query = "SELECT product.product_id,title, product_cate.cate_name, product_subcate.subcate_name FROM product ";
$query .= " inner join product_cate on product.cate_id = product_cate.cate_id";
$query .= " left outer join product_subcate on product.subcate_id = product_subcate.subcate_id ";
$query .= " ORDER by product_id DESC ";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result($id, $title, $cate_name, $subcate_name);
    $i=1;
    while ($stmt->fetch()) {
        //printf ("<tr>\n<td>%s</td><td>%s</td><td><a href='newrelease_edit_copyright.php?id=%s'>Edit</a></td><td><a href='newrelease_delete_copyright.php?id=%s'>X</a></td>\n</tr>%s (%s)\n", $id, $copyright,$id,$id);
        echo "<tr>";
        echo "  <td>$i</td>";
        echo "  <td>$title</td>";
        echo "  <td>$cate_name</td>";
        echo "  <td>$subcate_name</td>";
        echo "  <td align=right><a href='product_edit.php?id=$id'>Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);'  data-href='product_delete.php?id=$id' data-toggle=\"modal\" data-target=\"#confirm-delete\">X</a></td>";
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

<script src="dist/js/jquery.chained.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>


<script>

var toolbarGroups = [
{ name: 'styles', groups: [ 'styles' ] },
{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
{ name: 'forms', groups: [ 'forms' ] },
{ name: 'paragraph', groups: [ 'align', 'list', 'indent', 'blocks', 'bidi', 'paragraph' ] },
{ name: 'links', groups: [ 'links' ] },
{ name: 'insert', groups: [ 'insert' ] },
{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
'/',
{ name: 'colors', groups: [ 'colors' ] },
{ name: 'tools', groups: [ 'tools' ] },
{ name: 'others', groups: [ 'others' ] },
{ name: 'about', groups: [ 'about' ] }
];

CKEDITOR.replace( 'editor',{
	toolbarGroups,
	removeButtons : 'Scayt,SelectAll,Find,Replace,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Save,Templates,NewPage,Preview,Print,BidiLtr,BidiRtl,Language,CreateDiv,Blockquote,Outdent,Indent,Anchor,Flash,Smiley,SpecialChar,PageBreak,Iframe,Table,HorizontalRule,CopyFormatting,RemoveFormat,Undo,Redo,Cut,Copy,Paste,PasteText,PasteFromWord,Subscript,Superscript,Strike,Maximize,ShowBlocks,About,TextColor,BGColor,Font,Format,FontSize'
});

</script>


<script>
$("#form").on("submit", function(){
   //Code: Action (like ajax...)
	 var data = CKEDITOR.instances.editor.getData();
	 $('#ed').attr('value', data);

   //alert(data);

	//console.log($('#editor').html());
	 //$(this).src = "do_add_product.php";
	 $(this).submit();
	 //alert('submitttt');
   return false;
 });
</script>
<script>
$(document).ready(function(){
  $("#subcate").chained("#cate");
});
</script>
