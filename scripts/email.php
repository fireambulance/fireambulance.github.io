<?php

$msg = "Email: " . $_GET['email'] . "\nSubject: " . $_GET['subject'] . "\nMessage: " . $_GET['message'] . "";
$msg = wordwrap($msg,70);
$subject = "ShapeShiftOS Website Message :: " . $_GET['subject'] . "";

$mail=mail("ashutoshsundresh@gmail.com", $subject, $msg, $header);

?>
