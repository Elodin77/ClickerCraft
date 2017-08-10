<?php
  $file = fopen("log.txt", "w") or die("Unable to open file!");
  $message = $_POST['message']; // incoming message
  fwrite($file, $message);
?>
