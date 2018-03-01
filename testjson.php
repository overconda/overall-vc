<pre>

<?php


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
    $ret .= "\n<li class='dropdown-submenu'><a href='$link'>$top</a>";
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


?>
</pre>
