<?php     
$to_email = 'lomv12345@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: luchito.servers@gmail.com';
mail($to_email,$subject,$message,$headers);
?>
