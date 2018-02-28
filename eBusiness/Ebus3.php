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
    
    </head>
    <body>
        
                
                <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
              <button class="w3-bar-item w3-button w3-large"
              onclick="w3_close()">Close &times;</button> 
              
              <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">
             <i class="fa fa-caret-down"></i> <strong>Cloud Services</strong>
          </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
              <a href="../CV/Cloud/Amazon.html" class="w3-bar-item w3-button">Amazon</a>
              <a href="../CV/Cloud/Cloud9.html" class="w3-bar-item w3-button">Cloud9</a>
              <a href="../CV/Cloud/Drive.html" class="w3-bar-item w3-button">Google Drive</a> 
              <a href="../CV/Cloud/Dropbox.html" class="w3-bar-item w3-button">Dropbox</a> 
              <a href="../CV/Cloud/Gmail.html" class="w3-bar-item w3-button">Gmail</a> 
              <a href="../CV/Cloud/Salesforce.html" class="w3-bar-item w3-button">Salesforce</a> 
   
  </div>
              <br>
              <br>
               <a href="Ebus1.php" class="w3-bar-item w3-button"><strong>Proceed to Checkout</strong></a> 
               <br>
              <a href="lane.html" class="w3-bar-item w3-button"><strong>Return to Homepage</strong></a> 
            </div> 
            
            <script>
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
} 
</script>
            
            <div id="main">
            
            <div class="w3-green">
              <button id="openNav" class="w3-button w3-green w3-xlarge" onclick="w3_open()">&#9776;</button>
              <div class="w3-container">
                <h1>Receipt</h1>
              </div>
            </div>
            
            
            <div class="w3-container">
            
            </div>
            
            </div>
            
            <script>
            function w3_open() {
              document.getElementById("main").style.marginLeft = "25%";
              document.getElementById("mySidebar").style.width = "25%";
              document.getElementById("mySidebar").style.display = "block";
              document.getElementById("openNav").style.display = 'none';
            }
            function w3_close() {
              document.getElementById("main").style.marginLeft = "0%";
              document.getElementById("mySidebar").style.display = "none";
              document.getElementById("openNav").style.display = "inline-block";
            }
            </script>

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
        
    </body>
</html>