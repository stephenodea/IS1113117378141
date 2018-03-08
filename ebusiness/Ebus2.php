<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        
         <style>
         
          .bottom_img{
        position: fixed;
        width: 560px;
    }
         
      body{
    background:url('http://raslras.com/images/features_bg.jpeg') no-repeat;
    background-size: cover;
    font-family: arial;
    color: white;
}
   
    .button_proceed{
  height:38px;
  background:#0f847c;
  border:0;
  padding-left: 20px;
  padding-right:20px;
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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body align="center">
        
        <h4>Please enter your payment details.</h4>

            <br />
            
            <form align="center" method = "POST" action = "Ebus3.php">
 <label for="Name">Name</label>
<input type="text" id="user_name" placeholder="Name" maxlength="30">
<br><br>
<label for="Email"> Email Address</label>
<input type="text" id="user_email" placeholder="Email" maxlength="50">
                 
  
  <br/><br/>
  
                
                <label for="user_pin">PIN</label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button class ="button_proceed" type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
               
 


                
            </form>
            
            <br />
            
            <button  class ="Validate hover" onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <br/>
        
         <img align="center" class="bottom_img" src="http://www.globallinkic.org/images/interface/bodyFooter_img1.png"/>
    <?php
    // Set session variables
    $_SESSION["subtotal"] = $_POST["subtotal"];
     $_SESSION["discount"] = $_POST["discount"];
      $_SESSION["vat"] = $_POST["vat"];
       $_SESSION["total"] = $_POST["total"];
       ?>
    </body>
    
    
    
</html>
