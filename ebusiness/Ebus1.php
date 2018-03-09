<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
        <!--Linking to jquery and javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        </script>
    
    <style>
    
    .bottom_img{
        position: fixed;
    }
          
      body{
    background:url('https://hdwallsource.com/img/2014/9/simple-backgrounds-17275-17831-hd-wallpapers.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    font-family: arial;
    color: black;
}
   
    .button_Calculate{
  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    .cancel{
 background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}
 .button:hover {opacity: 1}
</style>
</head>
<body>
 }
</style>
    </head>
    <body>
        <div align="center">
        <h4>Our Products</h4>
        <img src="https://tbncdn.freelogodesign.org/d80063b8-8907-40a2-8877-a743dc88b49c.png?1520439932370">
        
        <!--Linking to next page-->
        <form method="POST" action="Ebus2.php">
            <!--Radiobuttons for different products-->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ &euro;100
            </label>
            
            <br/> </br>
            
            <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                C9 @ &euro;200
            </label>
            
            <br/> </br>
            
            <label for="AWS">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                AWS @ &euro;300
            </label>
            
            <br/> </br>
            
            <label for="Gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ &euro;400
            </label>
            
            <br/> </br>
            <!--Displaying price and details of product-->
             <label for="subtotal">
                Subtotal &euro;
                <input type="text" id="subtotal" value="0.00" name="subtotal" readonly/>
            </label>
            
            <br/> </br>
            
            <label for="discount">
                Discount &euro;
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/> </br>
            
             <label for="vat">
                VAT &euro;
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/> </br>
            
            <label for="total">
                Total &euro;
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            <br/> </br>
            <img src="http://simpleicon.com/wp-content/uploads/basket.png" height="150" width="150">
            <br/> </br>
            <button  type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        </form>
        <br/>
        <button class ="button_Calculate" onClick="calcSub()";"calcDisVatTotal()";>Calculate Cost</button>
        <a rule="button" class="cancel :hover" href="Ebus1.php">Clear </a>
        <br/><br/>
    </div>    
    </body>
</html>