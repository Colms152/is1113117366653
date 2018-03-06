
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <!-- In this head section the characters are set for website in order for it to be valid as per W3C's validator--> 
    <meta charset="utf-8" />
    <!-- Title is set for this webpage-->
    <title>Enter Details</title>
    <!--Linking to relevent style sheet for this page-->
    <link rel="stylesheet" href="cvs.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <!-- nav bar, header and footer called with php from a html file -->
       <?php include("repeated_features.html") ?>
       <!-- This is a division which is styled with css as the main content section of the webpage-->
       <div class="content">
        <h4>Please enter your payment details</h4>
        <!--This is a form which uses php to post the details to future pages-->
        <form name = "myForm"  method="POST" action="Ebus3.php">
                    <br>
                    <label for = "name">
                        <strong>  Name:</strong>
                        <br>
                        <input type ="text" id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for = "email">
                        <strong> Email:</strong>
                        <br>
                        <input type = "email" id ="email" name="email"/>
                    </label>
                    <br><br>
                    <label for="user_pin"><strong>PIN:</strong></label>
                    <br>
                   <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
           
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["costs"] = $_POST["costs"];
            ?>
        </div>
    </body>
</html>