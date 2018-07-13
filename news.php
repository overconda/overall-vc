<?php
include('functions.php');
include('dbconfig.php');
drawHeader();

$id=$_GET['id']+0;
$title = "";
$detail = "";
$date_publish = "";
$WHERE ="";
$ALL = true;
$output="";

if($id>0){
  $WHERE = " WHERE active=1 and news_id = $id";
  $ALL = false;
}else{
  $WHERE = " WHERE active=1";
}

if($ALL){
  $query = "SELECT news_id, title, detail,date_publish FROM news";
  $query .= $WHERE;
  $query .= " ORDER by date_publish DESC ";
  if ($stmt = $mysqli->prepare($query)) {

      $stmt->execute();

      $stmt->bind_result( $id , $t, $d, $p);
      while ($stmt->fetch()) {

        $title = $t;
        $detail = htmlspecialchars_decode($d);
        $date_publish = $p;

        $output .= "                            <div class='row'><div class='col-md-2'><i class='pull-right'>$date_publish</i></div><div class='col-md-8'><a href='news.php?id=$id' target='_blank'>$title</a></div></div>\n";

      }
      $stmt->close();
    }
}else{
  $query = "SELECT news_id, title, detail,date_publish FROM news";
  $query .= $WHERE;
  $query .= " ORDER by date_publish DESC ";
  if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result( $id , $t, $d, $p);
    while ($stmt->fetch()) {
      $title = $t;
      $detail = htmlspecialchars_decode($d);
      $date_publish = $p;

      $output .= "        <!-- Content -->\n";
      $output .= "        <section id=\"page-content\" class=\"sidebar-left\">\n";
      $output .= "            <div class=\"container\">\n";
      $output .= "                        <!-- Page title -->\n";
      $output .= "                        <div class=\"page-title\">\n";
      $output .= "                            <p><h3>$title</h3></p>\n";
      $output .= "                        </div>\n";
      $output .= "                        <!-- end: Page title -->\n";
      $output .= "\n";
      $output .= "                        <!-- Blog -->\n";
      $output .= "                        <div id=\"blog\">\n";
      $output .= "\n";
      $output .= "                            <!-- Post item-->\n";
      $output .= "                            <div class=\"post-item border\">\n";
      $output .= "                                <div class=\"post-item-wrap\">\n";
      $output .= "                                    <div class=\"post-item-description\">\n";
      $output .= "                                        <span class=\"post-meta-date\"><i class=\"fa fa-calendar-o\"></i>\n";
      $output .= "                                           $date_publish</span>\n";
      $output .= "                                        <p>$detail</p>\n";
      $output .= "                                    </div>\n";
      $output .= "                                </div>\n";
      $output .= "                            </div>\n";
      $output .= "                            <!-- end: Post item-->\n";
      $output .= "                        </div>\n";
      $output .= "                        <!-- end: Blog -->\n";
      $output .= "            </div>\n";
      $output .= "        </section>\n";
      $output .= "        <!-- end: Content -->\n";
    }

    $stmt->close();
  }
}



  if($ALL){
    $output = "<div class='container'><h1>News &amp; Update</h1>$output</div><p></p>";
  }

  echo $output;
?>






        <?php
drawFooter();

         ?>
