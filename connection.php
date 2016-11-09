<?php
  //this is the file that contains database details and get if its connected and set charset
  //$connection
  $connection = mysqli_connect("127.0.0.1", "root", "", "roboclub");
  mysqli_set_charset($link, utf8);
?>
