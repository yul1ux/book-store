
<?php
include("conf/config.php");

session_start();

 $username = mysqli_real_escape_string($conn,$_POST['name']);
 $password = mysqli_real_escape_string($conn,$_POST['pass']);

$result = mysqli_query($conn,"SELECT id FROM users WHERE name = '$username' and  password='$password'");
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if($count==1){
    $_SESSION['auth'] = true;
    header("location: book-list.php");
  } else {
    header("location: index.php?login=failed");
  }
?>