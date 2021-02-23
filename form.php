<?php

use PHPMailer\PHPMailer\PHPMailer;

require '/usr/share/php/libphp-phpmailer/autoload.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

 

  try{




    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'home.rewilliam@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'ovnir@s1'; // Gmail address Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    $mail->setFrom('home.rewilliam@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('williamcrampe427@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = '<strong>Message site CV</strong>';
    $mail->Body = "<h3>Nom : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message envoyés avec succès.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}

// base de donné


$servername = "localhost";
$database = "site";
$username = "root";
$password = "ovnir@s1";


$name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die();
}
 

 
$sql = "INSERT INTO mailcv (nom, mail, message) VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
     
} 
mysqli_close($conn);
?>
