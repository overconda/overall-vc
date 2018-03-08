<?php
include('functions.php');
include('dbconfig.php');
drawHeader();

$cate = $_GET['cate']+0;
$subcate = $_GET['subcate']+0;

$CATENAME = "";
$SUBCATENAME = "";


//// get category name
$query = " SELECT cate_name from product_cate where cate_id = $cate limit 1";

if ($stmt = $mysqli->prepare($query)) {
  $stmt->execute();
  $stmt->bind_result($catename);
  $i=1;
  while ($stmt->fetch()) {
    $CATENAME = $catename;

  }
}

$query = " SELECT subcate_name from product_subcate where subcate_id = $subcate limit 1";
if ($stmt = $mysqli->prepare($query)) {
  $stmt->execute();
  $stmt->bind_result($subcatename);
  $i=1;
  while ($stmt->fetch()) {
    $SUBCATENAME = $subcatename;
  }
}

if(trim($SUBCATENAME)!=''){
  $SUBCATENAME = ' - ' . $SUBCATENAME;
}

$WHERE = " WHERE active=1 ";
$col = 2;
if($cate==0 && $subcate==0){
  $col=3;
  $CATENAME = " All Products";
}else{
  if($cate>0 && $subcate==0){
    $col = 3;
    $WHERE .= " and cate_id = $cate ";
  }else{
    $WHERE .= " and cate_id = $cate and subcate_id = $subcate ";
  }

}

?>

        <!-- Content -->
        <section id="page-content" class="sidebar-left">
            <div class="container">
                <div class="row">
                    <!-- post content -->
                    <div class="content col-md-10">
                        <!-- Page title -->
                <div class="page-title">
                    <h1><?php echo $CATENAME . $SUBCATENAME; ?></h1>

                </div>
                <!-- end: Page title -->






<?php
$query = " select product_id, title, detail, price, pricesp+0, thumb, stock+0 ";
$query .= " FROM product ";
$query .= $WHERE;
$query .= " ORDER by product_id ";

$output = "";

if ($stmt = $mysqli->prepare($query)) {
  $stmt->execute();
  $stmt->bind_result($pid , $title, $detail, $price, $pricesp, $thumb, $stock);
  $i=0;
  while ($stmt->fetch()) {
    $i++;
    $PRICE = "";
    if($pricesp > 0){
      $PRICE = "ราคา <del>" . number_format($price) . "</del> บาท พิเศษ " . number_format($pricesp) . " บาท";
    }else{
      $PRICE = "ราคา " . number_format($price) . " บาท";
    }

    $detail = htmlspecialchars_decode($detail);

    $STOCK = "";
    if($stock ==0){
      $STOCK = "<h3><strong><mark>&nbsp;สินค้าหมด&nbsp;</mark></strong></h3>";
    }


    $output .= "                   <!-- Post item-->\n";
    $output .= "                   <div class=\"product post-item border\">\n";
    $output .= "                       <div class=\"post-item-wrap\">\n";
    $output .= "                           <div class=\"post-slider\">\n";
    $output .= "                                       <img alt=\"\" src=\"$thumb\">\n";
    $output .= "                           </div>\n";
    $output .= "\n";
    $output .= "                           <div class=\"post-item-description\">\n";
    $output .= "                               <h2>$title</h2>\n";
    $output .= "                               <h4 class=\"text-danger\">$PRICE</h4>\n";
    $output .= $STOCK;
    $output .= "                               <p>$detail</p>\n";
    $output .= "\n";
    $output .= "                           </div>\n";
    $output .= "                       </div>\n";
    $output .= "                   </div>\n";
    $output .= "                   <!-- end: Post item-->  \n";
    $output .= "\n";
  }
}

if($i==0){
    $output = "<div class='row'><div class='col-md-12' style='text-align:center;'><p><h4>ไม่พบสินค้า</h4></p></div></div>";
}else{
  $output = "<!-- Blog -->\n<div id=\"blog\" class=\"grid-layout post-$col-columns m-b-30\" data-item=\"post-item\">". $output . "</div>\n<!-- end: Blog -->";
}




echo $output;

 ?>








                    </div>
                    <!-- end: post content -->

                    <!-- Sidebar-->
                    <div class="sidebar col-md-2">
                        <div class="pinOnScroll">
                          <h4>Product Category</h4>
                          <ul class="list-icon list-icon-arrow">
                            <li><strong><a href="vcm.php">Karaoke</a></strong></li>
                            <li><strong>Sound</strong>
                              <ul class="list-icon list-icon-arrow">
                                <li><a href="product.php?cate=2&subcate=1">ลำโพง</a></li>
                                <li><a href="product.php?cate=2&subcate=2">แอมป์</a></li>
                                <li><a href="product.php?cate=2&subcate=3">ไมโครโฟน</a></li>
                                <li><a href="product.php?cate=2&subcate=4">ซับวูฟเฟอร์</a></li>
                                <li><a href="product.php?cate=2&subcate=5">อุปกรณ์เสริม</a></li>
                              </ul>
                            </li>
                            <li><strong>CCTV</strong>
                              <ul class="list-icon list-icon-arrow">
                                <li><a href="product.php?cate=3&subcate=6">Promotion</a></li>
                                <li><a href="product.php?cate=3&subcate=7">กล้องวงจรปิด</a></li>
                                <li><a href="product.php?cate=3&subcate=8">เครื่องบันทึก</a></li>
                                <li><a href="product.php?cate=3&subcate=9">อุปกรณ์เสริม</a></li>
                                <li><a href="product.php?cate=3&subcate=10">เกร็ดความรู้</a></li>
                              </ul>
                            </li>
                            <li><strong><a href="product.php?cate=4">TJ Media</a></strong></li>
                          </ul>



                        </div>
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Content -->




                <?php
        drawFooter();

                 ?>
