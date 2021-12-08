<?php
  $server = "mysql";
  $user   = "myapp";
  $pwd    = "123456";
  $db     = "myapp";

  $conn   = mysqli_connect($server, $user, $pwd, $db);

  if (mysqli_connect_errno()) {
    die("Connection failed. " . (mysqli_connect_errno()));
  }
?>
