<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>  
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    
    <style>
        .receiptbutton{  
            text-align:left; 
            font-size: 17px; 
            margin-right:auto;
            margin-left:auto; 
            width:400px; 
            
        }
    </style>  
    <style>
        .homepage{
            
        }
    </style>
 
    </head>
    <body>
        <script>
function myFunction() {
    window.print();
}
</script>

                
         
              
    
            <div id="main">
            
            <div class="w3-green">
            
              <div class="w3-container">
                <h1>Receipt</h1>
              </div>
            </div>
            
            
            <div class="w3-container">
            
            </div>
            
            </div>
         <div class="receiptbutton">

        <?php
        // Echo session variables that were set on previous page 
        echo "Dear " . $_POST["Clientname"] . ", your order has been confirmed."; ?> 
        <br> 
        <?php
        echo "If you have any further questions please email us using, " . $_POST["email"] . ", as this is linked to your account."; ?>
        <br>  
        <?php
         echo "Your subtotal is: $ " . $_SESSION["subtotal"] . "."; ?> 
         <br>
         <?php
          echo "Your discount is: $ " . $_SESSION["discount"] . "."; ?>
          <br>
          <?php
           echo "Your VAT is : $ " . $_SESSION["vat"] . "."; ?> 
           <br>
      <?php
        echo "Total: $ " . $_SESSION["total"] . "."; ?>  
        <br>
        <br>
        <br>
        <button class="homepage" onclick="myFunction()">Print this page</button>  <button><a href="lane.html"  class="homepage">Return to Homepage</a></button>

        </div> 
        
    </body>
</html>