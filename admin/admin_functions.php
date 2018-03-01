<?php

function drawAdminHeader(){
  echo file_get_contents('_head.html');
}


function drawAdminFooter(){
  echo file_get_contents('_foot.html');
}

function saveImage($data){
  if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
    $data = substr($data, strpos($data, ',') + 1);
    $type = strtolower($type[1]); // jpg, png, gif

    if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
        throw new \Exception('invalid image type');
    }

    $data = base64_decode($data);

    if ($data === false) {
        throw new \Exception('base64_decode failed');
    }
  } else {
      throw new \Exception('did not match data URI with image data');
  }

  if($type=="jpeg") $type = "jpg";

  $folder = "../images-up/";
  $filename = $folder . date('YmdHis') . rand(111,999) . ".{$type}";

  echo "<br /><br />TO: $filename";

  file_put_contents( $filename , $data);
}

?>
