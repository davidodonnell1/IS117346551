<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel= "stylesheet" href= "../ebusiness.css" type = "text/css" />
    
    <!--jQuery-->
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
 
    
    <body>
        <br>
        <div class="content">
        <h4>Please Enter Your Payment Details</h4>
        
        <form action="ebus_3.php" method="POST">
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            <br>
            <br>
            <label for"user_name">Name:</label>
            <input type="text" id="user_name">
            <br>
            <br>
            <label for="user_email">E-mail:</label>
            <input type="text" id="user_email">
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        <br/>
        <button onClick="ValidateDetails()">Validation</button>
        </div>
        
        
        <?php
        //start session variables
        $_session["total"]=$_POST["total"];
        ?>
        
    </body>
</html>