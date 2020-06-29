<?php
include ("PHPMailer-5.2.0/class.phpmailer.php");
//include ("class.smtp.php");
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$mail = new PHPMailer();
//$mail->setMail('smtp'); // smtp | mail (ham mail trong PHP), default: mail
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com"; //
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; // ssl hoac tls, neu su dung tls thi $mail->Port la: 587
$mail->Username = "minhphuc130298@gmail.com"; // tai khoan dang nhap de gui email
$mail->Password = "MP98*sheepbee";            // mat khau gui email

$mail->From = "minhphuc130298@gmail.com"; // email se duoc thay the email trong smtp
$mail->AddReplyTo("minhphuc130298@gmail.com");  // email cho phep nguoi dung reply lai
$mail->FromName = "phuc minh"; // ho ten nguoi gui email

$mail->WordWrap = 50;
$mail->IsHTML('text/html');     //text/html | text/plain, default:text/html

$mail->AltBody = "Send from ITNetCorp class_smtp_mail"; //Text Body

$mail->Body = "Noi dung can gui"; //HTML Body
$mail->Subject = "Tieu de email";
$mail->AddAddress($email); // email nguoi nhan

$mail->Send();
$mail->ClearAddresses();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>send email</title>
</head>
<body>
	<form action="email2.php" method="POST">
		<input type="email" name="email" placeholder="Email">
		<input type="submit" name="submit" value="Send Email">
	</form>
</body>
</html>