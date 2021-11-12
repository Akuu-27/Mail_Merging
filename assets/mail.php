<?php     
	$con=mysqli_connect("localhost","root","","phpmailer"); 
	if(!$con) { die(" Connection Error "); } 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mail Merging </title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
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
	<h2>MAIL</h2>
	<div class="container"style="margin:0; height: 500px;" >
		<div class="myform" style="position:center;">
			<form action="send.php" method="POST" style="padding: -10px;">
				<label style="font-size:25px; margin:0;" for="subject">Subject</label><br>
    			<textarea type="text"  style=" width: 100%; padding: 12px 20px;margin: 8px 0; box-sizing: border-box;" id="subject" name="subject" placeholder="Subject" rows="3" value="None"></textarea><br>
   				<label style="font-size:25px; margin:0;" for="message">Message</label><br>
    			<textarea id="message" style=" width: 100%; padding: 12px 20px;margin: 8px 0; box-sizing: border-box;" name="message" placeholder="Message" rows="5" value="None"></textarea ><br>
				<label><input  id="field_terms" onclick="this.setCustomValidity(validity.valueMissing ? 'Please indicate that You have checked recepients list' : '');" type="checkbox" required name="terms">
				<strong>Please Ensure the Receipients<br><button style="font-color:white;"><a href="view.php">check here</a></button>    <button type="submit" name="send">Send</button></strong></label><br>
			</form>
		</div>
	</div>
</body>
</html>