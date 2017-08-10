<?php
  $file = fopen("log.txt", "w") OR die("Cannot open file!");
  
  fwrite($file, "HI");
?>
