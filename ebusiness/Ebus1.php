<!DOCTYPE html>
<html>
    <head>
       <!-- In this head section the characters are set for website in order for it to be valid as per W3C's validator--> 
      <meta charset="utf-8" />
      <!-- Title is set for this webpage--> 
      <title>Select Product</title>
      <!--Linking to relevent style sheet for this page-->
      <link rel="stylesheet" href="cvs.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
      <!-- nav bar, header and footer called with php from a html file -->
       <?php include("repeated_features.html") ?>
        <!-- This is a division which is styled with css as the main content section of the webpage-->
       <div class="content">
            <h4>Select a Product</h4>
            
            <br/>
            <!--This is a form which uses php to post the details to future pages-->
            <form method="POST" action="Ebus2.php">
              
              <label for = "salesforce">
            <input type="radio" id="salesforce" name="product"  onClick="disablebtnProceed()"/>
            Salesforce @ $100
            </label>
            <br/><br>
            <label for ="cloud9">
            <input type = "radio" id ="cloud9" name = "product" onClick = "disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br><br>
            <label for= "aws">
           <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br><br>
            <label for ="Gmail">
            <input type = "radio" id ="Gmail" name = "product" onClick = "disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
              <br/>
              
              <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for = "discount">
                Discount of 5%:
                <input type = "text" id ="discount" name ="costs" readonly/>
            </label>
           
            <br>
            <label for ="vat">
            Vat @ 10%:
            <input type = "text" id ="vat" name ="costs" readonly />
            </label>
              <br>
              
              <label for="total">
                Total:
                <input type="text" id="total" name="costs" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            
            <br/>
            <!-- This button uses javascript to calculate the numbers-->
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    </div> 
    </body>
</html>
