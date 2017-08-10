<?php
  $file = fopen("log.txt", "w")
  $message = $_POST['message']; // incoming message
  fwrite($file, $message);
?>
