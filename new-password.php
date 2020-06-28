<?php
//session_start();
header('Content-Type: text/html; charset=UTF-8');
include('connect.php');
if (isset($_POST['Sub-new-pass'])) {
  $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($conn, $_POST['new_pass_c']);
  $email= $_SESSION['email'];

  // Grab to token that came from the email link
  $token1 = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c){
  	echo '<script language="javascript">alert("Mật khẩu không khớp!"); window.location="new-password.php";</script>';
        die ();
  }else{
  	$sql = "SELECT email FROM user WHERE _token='$token1' LIMIT 1";
    $results = mysqli_query($conn, $sql);
    $email = mysqli_fetch_assoc($results)['email'];
    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE user SET password='$new_pass' WHERE email='$email'";
      $results = mysqli_query($conn, $sql);
      header('location: login.php');
    }
  }
  /*if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $results = mysqli_query($conn, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE user SET password='$new_pass' WHERE email='$email'";
      $results = mysqli_query($conn, $sql);
      header('location: login.php');
    }
  }*/
}  
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<!-- Nhúng file CSS -->
	<link rel="stylesheet" href="style.css" />
	<title>New password page</title>
</head>
<body>
	<form action="" method="POST">
	<input type="password" placeholder="New password" name="new_pass" value ="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Invalid password!"/>
    <input type="password" placeholder="Confirm new password" name="new_pass_c" value ="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Invalid password!"/>
    <input class="submit-form" type='submit' name="Sub-new-pass" value='Xác nhận' />
	</form>
</body>
</html>
