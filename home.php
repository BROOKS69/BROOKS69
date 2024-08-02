<?php 
    session_start();
    include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed & Trends</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="homebg">
        
   
    <div class="welcome-user">
        <p>
            Hello <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['username'];
                }
            }
            ?>
            :)
        </p>
        <div class="logout">
            <a href="logout.php">LOGOUT</a>
        </div>
    </div>

   

<script src="script.js"></script>
</body>
</html>