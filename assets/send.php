<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
session_start();
$conn=mysqli_connect("localhost","root","","phpmailer"); 
if(!$conn) { die(" Connection Error "); } 

    if(isset($_POST['send']))
    {
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        
        $mail = new PHPMailer();
        $mail->isSMTP(); 
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "User@gmail.com";                    
        $mail->Password = "password";
        $mail->SMTPAuth = "tls";
        $mail->Port = 587;           
        
        $mail->setFrom("User@gmail.com");

        $sql = "select * from user where send_mail=1";
        $res = mysqli_query($conn, $sql);
  
        if(mysqli_num_rows($res) > 0) {
            while($x = mysqli_fetch_assoc($res)) {
                $mail->addBCC($x['email']);
            }
        $mail->isHTML(true);
        $mail->Subject = $subject;  
        $mail->Body = $message;
        $mail->AltBody = $message;
        } 
    }
    else{
        header("location:mail.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <title>Mail Merging </title>
       <link rel="stylesheet" href="styles.css">
       <link rel="stylesheet" href="style.css">
       <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
    </head>
   <body>
       <?php
           if($mail->send())
           {
              echo "<script>swal('Send!!','Message has been sent check mailbox','success').then(function() { window.location = 'index.html'; });;</script>"; 
           }
           else{
               echo "<script>swal('Error!!','failure due to the google security','error').then(function() { window.location = 'mail.php'; });;</script>";
           }
       ?>
</body>
</html>
