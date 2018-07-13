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
    New News
    <small>Add New News</small>
  </h1>
</section>

<section class="content">


<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">เพิ่มข่าว</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="do_add_news.php" id="form">
        <div class="box-body">

          <div class="form-group">
            <label for="title">หัวข้อข่าว</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="พิมพ์หัวข้อ">
          </div>



          <div class="form-group ">
            <label for="datepicker">วันที่แสดงข่าว</label>
            <div class="input-group date" id="datepicker">
              <input type="text" class="form-control"  name="datepicker" placeholder="">
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>

          </div>
          <style type="text/css">
            #datepicker{
              width: 200px;
              z-index: 99999999;
            }
            .datepicker table tr td.day:hover{
              background: #579682;
              color: #FFFFFF;
            }
            div.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-bottom{
              background-color: #dbfff3;
            }
          </style>
          <script>
            $( function() {
              $( "#datepicker" ).datepicker({
                format: "yyyy/mm/dd",
                showOtherMonths: true,
                selectOtherMonths: true,
                autoclose: true,
                changeMonth: true,
                changeYear: true,
                orientation: "bottom"
              });
            } );
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
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">ข่าว</h3>
      </div>
      <!-- /.box-header -->

      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>#</th>
            <th>หัวข้อข่าว</th>
            <th>รายละเอียด</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <?php


$query = "SELECT news_id,title, detail FROM news ";
$query .= " WHERE active=1 ";
$query .= " ORDER by news_id DESC ";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result($id, $title, $detail);
    $i=1;
    while ($stmt->fetch()) {
        //printf ("<tr>\n<td>%s</td><td>%s</td><td><a href='newrelease_edit_copyright.php?id=%s'>Edit</a></td><td><a href='newrelease_delete_copyright.php?id=%s'>X</a></td>\n</tr>%s (%s)\n", $id, $copyright,$id,$id);

        $detail = htmlspecialchars_decode($detail);
        $detail = strip_tags($detail);  /// remove html tag to simple show on table


        if(strlen($title) > $max){
          $title = iconv_substr($title,0,100,"UTF-8") . '...';
        }
        if(strlen($detail) > $max){
          $detail = iconv_substr($detail,0,60,"UTF-8") . '...';
        }


        echo "<tr>";
        echo "  <td>$i</td>";
        echo "  <td>$title</td>";
        echo "  <td>$detail</td>";
        echo "  <td align=right><a href='news_edit.php?id=$id'>Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);'  data-href='news_delete.php?id=$id' data-toggle=\"modal\" data-target=\"#confirm-delete\">X</a></td>";
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
