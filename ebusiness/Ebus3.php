<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
             body{
    background:url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/EbyCIUQPl/blue-paint-forming-a-circle-on-clear-white-background-alpha-matte-full-hd-cg-3d-render-element-of-motion-graphics-6_stnyi1jbg_thumbnail-full05.png');
    background-size:cover;
    background-repeat:no-repeat;
    font-family: arial;
    color: black;
             }
        </style>
        <title>Receipt</title>
    </head>
    
 <body align="center">
          <h3>Thank you for your order!</h3>
 
          <?php
          //Echo Session variables that contain order
           echo "Name: " . $_POST["name"] . "<br /> <br />";
       
           echo "Email: " . $_POST["email"] . "<br /> <br />";
       
           echo "Subtotal: " . $_SESSION["subtotal"] . " Euro.<br /> <br />";
           echo "Vat: " . $_SESSION["vat"] . " Euro.<br /> <br />";
           echo "Discount: " . $_SESSION["discount"] . " Euro.<br /> <br />";
           echo "Total: " . $_SESSION["total"] . " Euro.<br /> <br />";
       
           ?>
       
           <br />
       
           <br />
       
           <img src="https://cdn2.iconfinder.com/data/icons/weby-flat-vol-1/512/1_Approved-check-checkbox-confirm-green-success-tick-512.png" height="200" width="200">
           
           <br />
           
           <br />
           
           <!-- button taking you to homepage -->
        <a href="../homepage.html"> <img src="https://image.flaticon.com/icons/svg/23/23665.svg" height="75" width="75"></a>
        
        <br />
        <br />
          
    </body>
    
</html>