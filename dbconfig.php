<?php
$server = "localhost";
$db = "vc_db";
$user = "root";
$pwd = "root";


$mysqli = new mysqli($server, $user, $pwd, $db);

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
