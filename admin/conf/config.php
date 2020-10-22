<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mrtrojan";
$dbname = "book_store";

$conn = mysqli_connect($dbhost , $dbuser, $dbpass);
mysqli_select_db ($conn , $dbname);
?>

 