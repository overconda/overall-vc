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



if(!isset($_GET['id'])) header('Location: news_new.php');

include_once('../dbconfig.php');
include_once('admin_functions.php');

drawAdminHeader();

$id = $_GET['id'];
$DATA = array();

$query = "SELECT title, detail,date_publish FROM news ";
$query .= " WHERE news_id = $id";


if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result( $title, $detail, $publish);
    $i=1;
    while ($stmt->fetch()) {
        $DATA['title']        = $title;
        $DATA['detail']       = $detail;
        $DATA['publish']      = $publish;
    }

    $stmt->close();
}
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
    Edit News
  </h1>
</section>

<section class="content">


<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">แก้ไขข่าว</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="do_edit_news.php" id="form">
        <div class="box-body">

          <div class="form-group">
            <label for="title">หัวข้อข่าว</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="พิมพ์หัวข้อข่าว" value="<?php echo $DATA['title'];?>">
          </div>


          <div class="form-group ">
            <label for="datepicker">วันที่แสดงข่าว</label>
            <div class="input-group date" id="datepicker">
              <input type="text" class="form-control"  name="datepicker" placeholder="" value="<?php echo $publish;?>">
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

      				<?php
              $detail = htmlspecialchars_decode($DATA['detail']);
              echo $detail;;

              ?>

      			</div>

            <!---// EDITOR -->


          </div>

        </div>
        <!-- /.box-body -->

        <input type="hidden" name="id" value="<?php echo $id;?>" />

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
