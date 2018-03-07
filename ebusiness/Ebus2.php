<?php
// Start the session
session_start();
?>

<!--DOCTYPE html-->
<html>
    <head>
        
        <!-- title -->
        <title> Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>
    
    <body align="center">
        
        <!-- subheading -->
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <!-- Layout of the page and proceed to Ebus3 when all actions are completed -->
            <form method= "POST" action= "Ebus3.php">
                
                <!-- name textbox -->
                <label for="name"> Name</label>
                
                <input type="text" id="name" name="name" maxlength="25">
                
                <br />
                <br />
                
                <!-- email textbox -->
                <label for "Email"> Email Address</label>
                
                <input type="text" id="Email" name="Email" maxlength="30">
                
                <br />
                <br />
                
                <!-- pin textbox -->
                <label for="user_pin"> PIN</label>
                
                <input type="password" id="user_pin" name="Total" placeholder="Card Pin" maxlength="4">
                
                <!-- button to proceed -->
                <button style="font-size:15px" type="submit" id="btnPurchase" disabled>
                     Proceed with Purchase </button>
                
            </form>
            
            <br />
            
            <!-- button to go back to ebus1 and button to validate purchase -->
            <a href="Ebus1.html"><button style="font-size:15px; background-color:silver;">Back</button></a>
            
            <button style="font-size:15px;" onClick="validateDetails()"> Validate </button>
            <script type="text/javascript" src="Ebus2_validator.js"></script>

            <?php
        // Set session variables
        
        $_SESSION["Subtotal"] = $_POST["Subtotal"];
        
        $_SESSION["Discount"] = $_POST["Discount"];
        
        $_SESSION["Vat"] = $_POST["Vat"];
        
        $_SESSION["Total"] = $_POST["Total"];
        
        $_SESSION["name"] = $_POST["name"];
        
        $_SESSION["Email"] = $_POST["Email"];
        
        ?>
        
        <br />
        <br />
        
        <!-- footer -->
        <div id = "Footer">
              <p>Copyright 2018 &COPY; All Rights Reserved. Design By Brian O Connell 117376663</p>
          </div>
          
    </body>
    
</html>