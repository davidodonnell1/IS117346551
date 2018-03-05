<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
        <link rel= "stylesheet" href= "../ebusiness.css" type = "text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    <body>
        <br>
        <h4>Select a Product</h4>
        <br>
        
        <div class="content">
        <form method ="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id ="salesforce" name ="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br>
            
            <label for "cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            
            <br>
            
            <label for "aws">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            
            <br>
            
            <label for "gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            <label for ="subtotal">
                Sub Total
                <input type="text" id="subtotal" value = "0.00" name="subtotal" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="hidden" id="discount" value="0.00" name="discount" readonly/>
            </label>
            
            <label for="total">
                Total
                <input type="hidden" id="total" value="0.00" name="total" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onCLick="calcSub()">Calculate Cost</button>
        <button><a role="button" href="Ebus1.php">Clear Choice</a></button>
        </div>
    </body>
    
</html>