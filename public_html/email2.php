<form method="post" action="email2.php">
Email: <input name="email" id="email" type="text" />

Message:
<textarea name="message" id="message" rows="15" cols="40"></textarea>

<input type="submit" value="Submit" name="sub" />
</form>

<?php

// $email and $message are the data that is being
// posted to this page from our html contact form(
if(isset($_POST['sub'])){
$email = $_POST['email'] ;
$message = $_POST['message'] ;

// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("PHPMailer-5.2.0/class.phpmailer.php");

$mail = new PHPMailer();

// set mailer to use SMTP
$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = "localhost";  // specify main and backup server

$mail->SMTPAuth = true;     // turn on SMTP authentication

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: contact@domain.com
// pass: password
$mail->Username = "minhphuc130298@gmail.com";  // SMTP username
$mail->Password = "MP98*sheepbee"; // SMTP password

// $email is the user’s email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST[’email’] ;
$mail->From = $email;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress("mpbee1302@gmail.com", "Minpukka Coder");

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "You have received feedback from your website!";

// $message is the user’s message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST[‘message’] ;
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";
}

?>