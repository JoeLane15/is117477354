<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page 
        echo "Client Name: " . $_POST["Clientname"] . "."; ?> 
        <br>
      <?php
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>