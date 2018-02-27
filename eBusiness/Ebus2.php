<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="Ebus2_validator.js"></script> 
        
        <SCRIPT language="Javascript">
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
      
   </SCRIPT> 
   <script language="javascript">
function alphaOnly(e) {
  var code;
  if (!e) var e = window.event;
  if (e.keyCode) code = e.keyCode;
  else if (e.which) code = e.which;

  if ((code >= 48) && (code <= 57)) { return false; }
  return true;

}

</script>
        
        <style>.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  
 
}</style>
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
                <h1>Please enter your details</h1>
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


  
<form action="Ebus3.php" method="POST">            
                <div class="row">
  <div class="col-75">
    <div class="container">
      

        <input type="hidden" name="details" value=</input>
          <div class="col-50">
            
          
            <label for="Clientname">Client Name</label>
            <input type="text" id="Clientname" name="Clientname" onkeypress="return alphaOnly(event);" placeholder="John More Doe">  
            
            <label for="Clientname">Email</label>
            <input type="text" id="email" name="email" placeholder="JohnDoe@gmail.com">  
            
            <h2>Payment Details</h2>
            
             <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div> 
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" onkeypress="return alphaOnly(event);" placeholder="John More Doe"> 
            
            <label for="ccnum">Credit card number</label>
            <input type="text"  onkeypress="return isNumberKey(event)" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" maxlength="16"> 
             
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" onkeypress="return alphaOnly(event);"  placeholder="September" maxlength="9">
           
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear"  onkeypress="return isNumberKey(event)" placeholder="2018" maxlength="4"> 
                            </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" onkeypress="return isNumberKey(event)" id="cvv" name="cvv" placeholder="352" maxlength="3"> 
                <label for="user_pin">PIN</label>
                    
                    <input type="password"  onkeypress="return isNumberKey(event)" id="user_pin" placeholder="Card PIN" maxlength="4">
                  <button type="button" onClick="validateDetails()">Validate </button>
              
              </div>
            </div>
          </div>

        </div>
        
          <br/> 
          <div class="button">
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
          </div>  
        </div>
         

              
             
     
      
    </div>
  </div>

  <div class="col-25">
    
  </div>
</div>
            </form>
             
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
        
    </body>
</html>

