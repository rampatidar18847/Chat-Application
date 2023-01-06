<?php
 
   $username = "root";
   $password = "";
   $hostname = "localhost";
   $database = "chatroom";

   $conn = mysqli_connect($hostname,$username,$password,$database);

   if(!$conn)
   {
   	echo mysql_connect_error();
   }
?>