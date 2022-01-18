<?php

  $link = mysqli_connect("localhost", "root", "", "sesijos");
    
  if (mysqli_errno($link)) {
  echo mysqli_error($link);
  exit;
  }
