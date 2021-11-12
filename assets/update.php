<?php 
$con=mysqli_connect("localhost","root","","phpmailer"); 
if(!$con) { die(" Connection Error "); } 
    $UserID = $_GET['GetID'];
    $query = " select * from user where id='".$UserID."'";
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <link rel="Stylesheet" href="styles.css">
    <link rel="Stylesheet" href="style.css">
    <title>Mail Merging</title>
</head>

<body>
    <nav class="sidebar">
        <ul class="text">
          <li><a href="index.html">HOME</a></li>
          <li><a href="view.php">VIEW</a></li>
          <li><a href="insert.php">INSERT</a></li>
          <li><a href="mail.php">MAIL</a></li>
        </ul>
      </nav>
        <div class="container">
            <div class="myform">    
            <h2>UPDATE</h2><br>
            <form action="update_succ.php?ID=<?php echo $UserID ?>" method="post">
            <br><br>
                <label style="font-size:25px; margin:0;" for="fname">First Name</label><br>  
                <input type="text" class="form-control mb-2" placeholder=" first Name " name="fname" value="<?php echo $fname ?>"><br>
                <label style="font-size:25px; margin:0;" for="lname">Last Name</label><br>  
                <input type="text" class="form-control mb-2" placeholder=" last Name " name="lname" value="<?php echo $lname ?>"><br>
                <label style="font-size:25px; margin:0;" for="email">Email</label><br>  
                <input type="email" class="form-control mb-2" placeholder=" Email " name="email" value="<?php echo $email ?>">
                <button class="btn btn-primary" name="update">Update</button>
            </form>
            </div>
        </div>    
    </body>
</html>