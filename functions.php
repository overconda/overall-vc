
<?php

function drawHeader(){
  $s = file_get_contents('_header.html');
  $menu = drawMenu();
  $s = str_replace('<!--##MENU##-->', $menu, $s);
  echo $s;
}


function drawMenu(){
  $ret = "";
  $string = file_get_contents("menu.json");
  $json_a = json_decode($string, true);

  $ret = "\n<div id=\"mainMenu\" class=\"light\">";
  $ret .= "\n<div class='container'>";
  $ret .= "\n<nav>";


  $menu = $json_a['menu'];
  //level 1
  $ret .= "\n<ul>";
  foreach($menu as $index => $topmenu){
    $top = $topmenu['name'];
    $link = $topmenu['link'];
    if(isset($topmenu['sub'])){
      $ret .= "\n<li class='dropdown-submenu'><a href='$link'>$top</a>";
    }else{
      $ret .= "\n<li class=''><a href='$link'>$top</a>";
    }

    if(isset($topmenu['sub'])){
      $ret .= "\n<ul class='dropdown-menu'>";
      foreach($topmenu['sub'] as $subindex => $submenu){
        $subname = $submenu['name'];
        $sublink = $submenu['link'];
        $ret .= "\n<li><a href='$sublink'>$subname</a></li>";
      }
      $ret .= "\n</ul>";
    }
    $ret .= "\n</li>";
  }
  $ret .= "\n</ul>";
  $ret .= "\n</nav>";
  $ret .= "\n</div>";
  $ret .= "\n</div>";

  return $ret;
}

function drawFooter(){
$out =<<<EOD
<footer id="footer" class="footer-light">

    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center"> Copyright &copy; 2002, Entertainment Network Co., Ltd. All Rights Reserved.</div>
        </div>
    </div>
</footer>

</div>
<!-- end: Wrapper -->

<!-- Go to top button -->
<a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
<!--Plugins-->
 <script src="js/jquery.js"></script>
 <script src="js/plugins.js"></script>

<!--Template functions-->
 <script src="js/functions.js"></script>
</body>

</html>
EOD;
echo $out;
}
?>
