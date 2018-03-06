<?php
// Start the session
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- In this head section the characters are set for website in order for it to be valid as per W3C's validator--> 
        <meta charset="utf-8" />
        <!-- Title is set for this webpage-->
        <title>RECEIPT</title>
        <!--Linking to relevent style sheet for this page-->
        <link rel="stylesheet" href="cvs.css">
    </head>
    <body>
         <!-- nav bar, header and footer called with php from a html file -->
         <?php include("repeated_features.html") ?>
         <!-- This is a division which is styled with css as the main content section of the webpage-->
       <div class="content">
        <h4>RECEIPT</h4>
        <br>
         <?php
        //Echo session varaibles that were set on the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" . $_SESSION["costs"] ;
        ?>
        <br><br>
        <a href="../ebusiness/csvhomepage.php">Home</a>
    </div>
    </body>
</html>