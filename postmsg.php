<?php

session_start();
//connecting to database
include 'db_connect.php';

$msg = $_POST['text'];
$room = $_POST['room'];
$name = $_POST['name'];
$sql = "INSERT INTO `msgs` (`msg`, `room`, `name`, `stime`) VALUES ('$msg', '$room', '$name', current_timestamp());";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>