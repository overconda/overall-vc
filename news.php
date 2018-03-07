<?php
include('functions.php');
include('dbconfig.php');
drawHeader();

$id=$_GET['id'];
$title = "";
$detail = "";
$date_publish = "";

$query = "SELECT title, detail,date_publish FROM news";
$query .= " WHERE active=1 and news_id = $id";
$query .= " ORDER by news_id DESC LIMIT 1";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result( $t, $d, $p);
    while ($stmt->fetch()) {
      $title = $t;
      $detail = htmlspecialchars_decode($d);
      $date_publish = $p;

    }
    $stmt->close();
  }
?>

        <!-- Content -->
        <section id="page-content" class="sidebar-left">
            <div class="container">
                        <!-- Page title -->
                        <div class="page-title">
                            <h1><?php echo $title;?></h1>
                        </div>
                        <!-- end: Page title -->

                        <!-- Blog -->
                        <div id="blog">

                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $date_publish;?></span>
                                        <p><?php echo $detail;?></p>


                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->


                        </div>
                        <!-- end: Blog -->


            </div>
        </section>
        <!-- end: Content -->




        <?php
drawFooter();

         ?>
