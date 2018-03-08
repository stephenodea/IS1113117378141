<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- title -->
        <title>RECEIPT</title>
    </head>
    
 <body align="center">
          <!-- subheading -->
          <h3>RECEIPT </h3>
 
          <?php
          //Echo Session variables that were set on previous page
           echo "Name: " . $_POST["name"] . "<br /> <br />";
       
           echo "Email: " . $_POST["Email"] . "<br /> <br />";
       
           echo "Subtotal: " . $_SESSION["Subtotal"] . " Euro.<br /> <br />";
        
           echo "Discount: " . $_SESSION["Discount"] . " Euro.<br /> <br />";
       
           echo "Vat: " . $_SESSION["Vat"] . " Euro.<br /> <br />";
       
           echo "Total: " . $_SESSION["Total"] . " Euro.<br /> <br />";
       
           ?>
       
           <br />
       
           <br />
       
           <p>Thank you for ordering off cloud services and we look forward to your business again</p>
           
           <br />
           
           <br />
           
           <!-- button to homepage -->
        <a href="../Homepage.html"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9kXqwVS9KhCmGPVPj_ZK_3dRqEHLSwzLIU4hQ1QW25ABtmXYVfw" alt"homepage" height="75" width="75"></a>
        
        <br />
        <br />
        
        <!-- footer -->
        <div id = "Footer">
              <p>Copyright 2018 &COPY; All Rights Reserved. Design By Brian O Connell 117376663</p>
          </div>
          
    </body>
    
</html>