<?php
$server = "localhost";
$db = "vcyoucom_web";//"vc_db";
$user = "vcyoucom_web";//"root";
$pwd = "DPUy%E@X8_mM@3&g";//"root";


$mysqli = new mysqli($server, $user, $pwd, $db);
mysqli_set_charset($mysqli, "utf8");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
  //printf('Connected..');
}

/*
$query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->bind_result($name, $code);

    while ($stmt->fetch()) {
        printf ("%s (%s)\n", $name, $code);
    }

    $stmt->close();
}
*/
?>
