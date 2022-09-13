<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $mailTo = "info@littlesisterscoffee.com";
  $headers = "From: ".$mailFrom;
  
  mail($mailTo, $subject, $mailFrom);
}
?>
