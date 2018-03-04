<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel="stylesheet" href="cvs.css">
    </head>
    <body>
         <?php include("repeated_features.html") ?>
         <div class="content">
        <h4>RECEIPT</h4>
        <br>
         <?php
        //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" . $_SESSION["costs"] ;
        ?>
        <br><br>
        <a href="../ebusiness/csvhomepage.php">Home</a>
    </div>
    </body>
</html>