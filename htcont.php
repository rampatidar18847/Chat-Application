<?php

  session_start();
  $room = $_POST['room'];
  include 'db_connect.php';
  $sql = "select msg, stime, name from msgs where room = 'ram'";

  $res = "";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
        $res = $res . '<div class="container">' . $row['name'];
        $res = $res . "  says <p>".$row['msg'];
        $res = $res . '</p> <span class="time-right">' . $row["stime"] . '</span></div>';
    }
  }
  echo $res;

?>