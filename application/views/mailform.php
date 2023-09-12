<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
<form method="post" action="<?php echo base_url().'index.php/MailSend/sent'?>">
	Sender mail id: <input type="email" name="email">
	Subject: <input type="text" name="subject">
	Body: <input type="text" name="body">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>