<?php

$conn = mysqli_connect('localhost', 'root', '', 'operationcrud');
  if (!$conn) 
      {
        die("Connection Failed".mysqli_connect_error());
      }
    mysqli_close($conn);

?>