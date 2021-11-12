<!DOCTYPE html>
<?php 

$con=mysqli_connect("localhost","root","","phpmailer"); 
if(!$con) { die(" Connection Error "); } 
    $query = " select * from user ";
    $result = mysqli_query($con,$query);

?>
<html lang="en">
  <html>
    <head>
      <meta charset="utf-8" />
      <title>E-mail Marging</title>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="styles.css">

      <style>
        h1 {
          position: fixed;
          margin-left: 40%;
          font-size: 40px;
          margin-top: 0px;
          color:yellow;
          padding: 10px 10px 15px 20px;
          text-shadow: 2px 2px #7ab6c5;
          font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",sans-serif;
        }
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 50%;
          position:center;
          margin:7% 20%;
        }

        #customers td,
        #customers th {
          border: 1px solid #ddd;
          padding: 10px;
        }

        #customers tr:nth-child(even) {
          background-color: #f2f2f2;
        }

        #customers tr:hover {
          background-color: #ddd;
        }

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: black;
          color: white;
          position:center;
        }
        button{
          color: white;
          background-color: #1c1c1e;
          border: none;
          outline: none;
          border-radius: 2px;
          font-size: 14px;
          padding: 7px 12px;
          font-weight: 500;
        }
      </style>
    </head>

    <body>
      <nav class="sidebar">
        <ul class="text">
          <h1>VIEW DATA</h1>
          <li><a href="index.html">HOME</a></li>
          <li><a href="view.php">VIEW</a></li>
          <li><a href="insert.php">INSERT</a></li>
          <li><a href="mail.php">MAIL</a></li>
        </ul>
      </nav>
      <table id="customers" class="table table-bordered">
                            <tr>
                                <th> SR No</th>
                                <th> ID </th>
                                <th> First Name </th>
                                <th> Last Name</th>
                                <th> Email </th>
                                <th> Update</th>
                                <th> Delete </th>
                            </tr>

                            <?php 
                                    $count=1;
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $fname = $row['fname'];
                                        $lname = $row['lname'];
                                        $email = $row['email'];
                            ?>
                                    <tr>
                                        <td><?php echo $count?></td>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $fname ?></td>
                                        <td><?php echo $lname ?></td>
                                        <td><?php echo $email ?></td>
                                        <td> <a href="update.php?GetID=<?php echo $UserID ?>"><button type="submit">UPDATE</button></a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>"><button>DELETE</button></a></td>
                                    </tr>
                            <?php 
                                    $count=$count+1;
                                    }  
                            ?>                                                                    
                                
                        </table>
    </body>
  </html>
</html>
