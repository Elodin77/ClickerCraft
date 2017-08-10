<?php
  $file = fopen("log.txt", "w") or die("Unable to open file!");
  
  fwrite($file, "HI");
?>
