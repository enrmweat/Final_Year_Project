<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'mike_weatherall@hotmail.co.uk';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for contacting me. I will aim to respond shortly.');
		window.location = 'about.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Your message did not send. Please, try again.');
		window.location = 'about.php';
	</script>
<?php
}
?>