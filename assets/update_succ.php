<?php 
$con=mysqli_connect("localhost","root","","phpmailer"); 
if(!$con) { die(" Connection Error "); } 
    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        $query = " update user set fname = '".$fname."', lname='".$lname."',email='".$email."' where id='".$UserID."'";
        $result = mysqli_query($con,$query);
    }
    else
    {
        header("location:view.php");
    }
?>
<!DOCTYPE html>

<html lang="en">
   <head>
       <meta charset="utf-8">
       <title>Mail Merging </title>
       <link rel="stylesheet" href="insert.css">
       <link rel="stylesheet" href="style.css">
       <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
    </head>
    <body>
    <?php
         if($result)
         {
             echo"<script>swal( 'Success!!','Data Updated Successfully!','success' ).then(function() { window.location = 'view.php'; });;</script>";
         }
         else
         {
             echo "<script>swal( 'Error','Can't insert data','error' ).then(function() { window. location = 'view customer.php'; });;</script>";
         }
        ?>
    </body>
</html>