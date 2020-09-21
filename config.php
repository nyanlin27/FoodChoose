<?php
  $server     = "sql104.epizy.com";
  $username   = "epiz_26776769";
  $password   = "euhxW0kMrgeV";
  $dbname     = "epiz_26776769_foodchoose";

  $connect = mysqli_connect($server, $username, $password, $dbname);

  if ($connect) {
    die("Connect Failed:".mysqli_connect_error());
  }
