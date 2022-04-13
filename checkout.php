<?php
    require 'connect.php';
    session_start();

    //var_dump($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href = "css/checkout.css" type = "text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Succulents</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
    </style>
</head>
<body>
    <div class="checkout_cont">
        <div class="home_btn">
            <a href="index.php">Back Home</a>
            
            <a href="cart.php">Back to Cart</a>
        </div>
        <div class="title">Checkout</div>
        <form method="post" class="form" action="checkoutAction.php">
            <label for="firstName">First Name:</label><br>
                <input type="text" id="firstName" name="firstName" required><br><br>
            <label for="lastName">Last Name:</label><br>
                <input type="text" id="lastName" name="lastName" required><br><br>
            <label for="cardNumber">Card Number:</label><br>
                <input type="text" id="cardNumber" name="cardNumber" maxlength="16" required><br><br>
            <label for="expDate">Expiration Date:</label><br>
                <input type="text" id="expDate" name="expDate" maxlength="7" required><br><br>
            <label for="cardCVV">CVV:</label><br>
                <input type="text" id="cardCVV" name="cardCVV" maxlength="3" required><br><br>
            <label for="billingAddress">Billing Address:</label><br>
                <input type="text" id="billingAddress" name="billingAddress" required><br><br>
            <label for="shippingAddress">Shipping Address:</label><br>
                <input type="text" id="shippingAddress" name="shippingAddress" required><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>