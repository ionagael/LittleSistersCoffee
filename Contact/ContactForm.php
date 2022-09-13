<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  
  $mailTo = "info@littlesisterscoffee.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name;
  
  mail($mailTo, $subject, $headers);
  header("Location: index.php@mailsend");
}
?>
