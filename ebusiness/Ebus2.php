<?php
// Start the session
session_start();
?>



<!DOCTYPE html>

<html>
    <head>
        
        
         <style>
         
         /* Applying CSS for background image and designing buttons*/
          .bottom_img{
        position: fixed;
        width: 560px;
    }
         
      body{
    background:url('https://hdwallsource.com/img/2014/9/simple-backgrounds-17275-17831-hd-wallpapers.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    font-family: arial;
    color: black;
}
   
    .button_proceed{
  height:38px;
  background:#0f847c;
  border:0;
  padding-left: 50px;
  padding-right:50px;
  color:#ffffff;
  cursor: pointer;
}
    .Validate{
border: 2px solid #f44336;
    background-color: white; 
    color: blue;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
 .hover:hover{
     background-color: #0000FF;
    color: white; 
 }
</style>
        
        <title> Customer Details</title>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body align="center">
        
        <h4>Customer Details.</h4>
        <img src="https://cdn3.iconfinder.com/data/icons/business-vol-13/100/Artboard_18-512.png" height="150" width="150">
            <br />
            
            <form align="center" method = "POST" action = "Ebus3.php">
                
                
                  <!--Labels for Customer details-->
   <label for="name"> Name</label>
  <input type="text" id="user_name" name="name"  placeholder="Name" maxlength="30">
<br><br>

                <label for "email"> Email Address</label>
                <input type="text" id="user_email" name="email" maxlength="50" placeholder="Email">
  
  <br/><br/>
  
                
                <label for="user_pin">
                     PIN 
                </label>
                
                  <!--length of pin set to 4 characters-->
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    <br/></br>
                      <!--button to purchase product-->
                <button class ="button_proceed" type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
               
 


                
            </form>
            
            <br />
            
              <!--Validation button-->
              
            <button  class ="Validate hover" onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <br/>
        <?php
        // Set session variables to be used in receipt
        
        $_SESSION["subtotal"] = $_POST["subtotal"];
        
        $_SESSION["discount"] = $_POST["discount"];
        
        $_SESSION["vat"] = $_POST["vat"];
        
        $_SESSION["total"] = $_POST["total"];
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        
        ?>
    </body>
    
    
    
</html>