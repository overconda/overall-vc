<?php
include('functions.php');
include_once('dbconfig.php');

drawHeader();
?>

<!-- Page title -->
<section id="page-title" data-parallax-image="images/vc-images/mic5-r.jpg" data-velocity="0.35">
<div class="container">
<div class="page-title">
  <h1>รายชื่อ อัลบั้มเพลง อัพเดต ประจำเดือน</h1>
  <span><strong>หากท่านต้องการเพิ่มเพลง ให้จดรหัสอัลบั้มที่ต้องการ ระบุชื่อร้าน+ชื่อบุคคล พร้อมเบอร์โทรติดต่อกลับ <br />ส่งแฟ๊กซ์มาได้ที่เบอร์ 0-2873-0663 ถึงน้องฮู้ ขอบคุณมากค่ะ</strong></span>
</div>

</div>
</section>
<!-- end: Page title -->


<!-- Page Content -->
<section id="page-content">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="content col-md-9">
                <!-- Blog -->
                <div id="blog" class="single-post">
                    <!-- Post single item-->
                    <div class="post-item">


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
                                  <th>Code</th>
                                  <th>อัลบั้ม</th>
                                  <th>ศิลปิน</th>
                                  <th>ลิขสิทธิ์</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                  $mm = 0;
                                  $yy = 0;
                                  if(isset($_GET['y']) && isset($_GET['m'])){
                                    $mm = $_GET['m'];
                                    $yy = $_GET['y'];
                                  }else{
                                    ///// check latest

                                    $query = "SELECT count(nr_id), nr_year, nr_month ";
                                    $query .= " FROM newrelease ";
                                    $query .= " GROUP BY nr_year, nr_month ";
                                    $query .= " ORDER BY nr_year DESC, nr_month DESC ";
                                    $query .= " LIMIT 1";

                                    if ($stmt = $mysqli->prepare($query)) {

                                        $stmt->execute();

                                        $stmt->bind_result($ccc, $yyy, $mmm);
                                        $i=1;
                                        $stmt->fetch();

                                        $mm = $mmm;
                                        $yy = $yyy;

                                        $stmt->close();
                                    }

                                  }

                                  $query = "SELECT nr_id as id, code , album ,artist.artist_name, copyright.copyright, nr_year as y , nr_month as m FROM newrelease";
                                  $query .= " inner join copyright on newrelease.copyright = copyright.id ";
                                  $query .= " inner join artist on newrelease.artist_id = artist.id ";
                                  $query .= " WHERE nr_year= $yy and nr_month = $mm ";
                                  $query .= " ORDER by y, m DESC ";
                                  if ($stmt = $mysqli->prepare($query)) {

                                      $stmt->execute();

                                      $stmt->bind_result($id, $code, $album,$artist_name, $copyright, $y, $m);
                                      $i=1;
                                      while ($stmt->fetch()) {
                                          //printf ("<tr>\n<td>%s</td><td>%s</td><td><a href='newrelease_edit_copyright.php?id=%s'>Edit</a></td><td><a href='newrelease_delete_copyright.php?id=%s'>X</a></td>\n</tr>%s (%s)\n", $id, $copyright,$id,$id);


                                          $sMonth = $month[$m];
                                          echo "<tr>";
                                          echo "  <td>$code</td>";
                                          echo "  <td>$album</td>";
                                          echo "  <td>$artist_name</td>";
                                          echo "  <td>$copyright</td>";
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



                    </div>
                    <!-- end: Post single item-->
                </div>

            </div>
            <!-- end: content -->

            <!-- Sidebar-->
            <div class="sidebar col-md-3">
                <div class="pinOnScroll">
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
);

$sDate = date('Y');
$thisYear = (int)$sDate + 543;


$YEAR = array();


for($y = $thisYear ; $y >=2550 ; $y--){
  // check if year have data , enable it. If not hide it
  $query = "select count(nr_year) as cc from newrelease where nr_year=$y";
  //echo $query;

  if ($stmt = $mysqli->prepare($query)) {

      $stmt->execute();

      $stmt->bind_result($cc);
      $i=1;
      $stmt->fetch();

      if($cc>0){
        $YEAR[] = $y;
      }

      $stmt->close();
  }
}

$MONTH = array();
foreach($YEAR as $y){
  //echo "<br />&gt;&gt; $y";

  // each month

  for($m=1; $m<=12;$m++){
    $sql = "select count(nr_month) as ccc from newrelease where nr_year=$y and nr_month=$m";
    //echo "<br />$query";
    if ($stmt2 = $mysqli->prepare($sql)) {

      $stmt2->execute();
      $stmt2->bind_result($ccc);
      //echo " [$y:$m = $ccc] ";
      $stmt2->fetch();
      if($ccc>0){
        $sMonth = $month[$m];
        //echo "\n<h5>ปี $y เดือน $sMonth</h5>\n";
        $MONTH[$y][$m] = 'yes';
      }
      $stmt2->close();
    }
  }
}



foreach ($MONTH as $y=>$M) {
  # code...
  echo "\n<h5>ปี $y</h5>";
  foreach ($M as $key => $value) {
    # code...
    $sMonth = $month[$key];
    echo "\n<a href='newrelease.php?y=$y&m=$key'>$sMonth</a><br />";
  }
  echo "<br />";
}

 ?>

                </div>
            </div>
            <!-- end: sidebar-->
        </div>
    </div>
</section>
<!-- end: Page Content -->



        <!-- Footer -->
        <?php
        drawFooter();
         ?>
