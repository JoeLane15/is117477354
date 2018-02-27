<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title> 
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
<style>.salesforce{input-align:center;


}
</style>
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
              <a href="../homepage.html" class="w3-bar-item w3-button"><strong>Return to Homepage</strong></a> 
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
                <h1>Select a Product</h1>
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

          
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              <label for="c9">
                    <input type="radio" id="c9" name="product" onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                </label>
                
                <br/>
                <br/>
                
                <label for="gmail">
                    <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                    Gmail @ $400
                </label>
                
                 <br/>
                <br/>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
                <label for="discount">
                    Discount at 5%
                    <input type="text" id="discount" name="discount" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
                 <label for="vat">
                    Vat at 10%
                    <input type="text" id="vat" name ="vat" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
              
              
                <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>