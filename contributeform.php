<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "sdr@act3.dk";
  $headers = "From: ".$mailFrom;
  $txt = "You have receieved an e-mail from".$name.".\n\n".$message;

  mail($mailTo, $headers, $txt, $headers);
  header("Location:contribute.html?mailsend");
}
