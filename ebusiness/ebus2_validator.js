/* global $ */

function validateDetails(){
    
    // declaring my variables
    
    var pin;
    var name;
    var email;
    
    // applying values to my variables
    
    pin = document.getElementById("user_pin").value;
     name = document.getElementById("user_name").value;
       email = document.getElementById("user_email").value;
    
    // if statements to ensure correct data entered
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
        else if (name==""){
            alert("Please enter your Name!")
        }
        else if (email==""){
        alert("Please enter your email!");
   }
    else{
        enablebtnPurchase();
        }
}

// function for proceed button
function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}