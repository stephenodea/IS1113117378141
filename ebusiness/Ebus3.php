<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
         
    </head>
    <body id="receipt">
        <h4>RECEIPT</h4>
                 <?php
                 $_SESSION["user_email"] = $_POST["user_email"];
              $_SESSION["user_name"] = $_POST["user_name"];
              ?>
              
        <?php
        // Echo session variables that were set on previous page
        echo "Total Price is " . $_SESSION["total"] . "</br>";
        echo "Name: " . $_SESSION["user_name"] . "</br>";
        echo "Email: " . $_SESSION["user_email"] . "</br>";
        ?>
    </body>
</html>