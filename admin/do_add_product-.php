<pre>

<?php

$data = $_POST;
//$data = json_decode($_POST, true);

print_r($data);
exit;
 ?>
 xx

 <?php

$ed = json_decode($data['editordata'], true);
var_dump($ed);

echo "<br /><br />------=====-------<br />";

//print_r ($ed["ops"]);
print_r($ed['ops'][1]['insert']['image']);

$IMAGES = array();

for($i=0; $i<sizeof($ed['ops']); $i++){

  if(isset($ed['ops'][$i]['insert']['image'])){
    //echo "<br />Found Image!";
    $IMAGES[] = $ed['ops'][$i]['insert']['image'];
  }
}

exit;
include('admin_functions.php');

saveImage($ed['ops'][1]['insert']['image']);


  ?>

 </pre>
