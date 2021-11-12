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
            <h2>INSERT</h2><br>
              <form action="insert_succ.php" method="POST"> <br><br>
              <label style="font-size:25px; margin:0;" for="fname">First Name</label><br>  
                <input type="text" placeholder="First-name" required name='fname'><br>
                <label style="font-size:25px; margin:0;" for="fname">Last Name</label><br>  
                <input type="text" placeholder="Last-name" required name='lname'><br>
                <label style="font-size:25px; margin:0;" for="fname">Email</label><br>  
                <input type="text" placeholder="Enter mail-id" required name='email'>
                <button id="mailer" name="insert" type="submit">INSERT</button>
              </form>
            </div>
        </div>    
    </body>
</html>    