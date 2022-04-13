<?php
    require 'connect.php';
    session_start();

    //var_dump($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href = "css/cart.css" type = "text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Succulent</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
    </style>
</head>
<body>
    <div class="cart_cont">
        <div class="cart">
            <div class="home_btn">
                <a href="index.php">Back Home</a>
            </div>
            <div class="cart_title">Shopping Cart</div>
            <div class="prod_cont">
            <?php
                //this chunk of code prints the plants that have been added to cart
                if (empty($_SESSION['cart'])) {
                    echo "<p class='empty_cart'>Your Cart is Empty</p>";
                }
                else{
                    $whereIn = implode(',',$_SESSION['cart']); //implodes data
                    //echo $whereIn; //prints the impoded data
                    $sql = "
                        SELECT * FROM products WHERE productID IN ($whereIn);
                    ";
                    $result = $conn->query($sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            if (isset($whereIn)) {
                                $quantity = substr_count($whereIn, $row['productID']); //counts how often each product appears in the string    
                            }
                            echo "
                            <div class='prod'>
                            <div class='prod_img'>
                                <img src='{$row['productImage']}'>
                            </div>
                            <div class='prod_name'>{$row['productName']}</div>
                            <div class='quantity_box'>{$quantity}</div>
                            <div class='prod_price'>$ {$row['productPrice']}</div>
                            <a class='prod_add' href='addAction.php?id={$row['productID']}'><abbr title='Add Another'>+</abbr></a>
                            </div>
                            ";
                        }
                    }
                }
                //total price
                if (empty($_SESSION['cart'])) {}
                else{
                    $whereIn = implode(',',$_SESSION['cart']); //implodes data
                    $sql = "
                        SELECT * FROM products WHERE productID IN ($whereIn);
                    ";
                    // echo $whereIn; //prints the impoded data
                    $result = $conn->query($sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        $totalPrice = 0.00;
                        while($row = mysqli_fetch_assoc($result)){
                            if (isset($whereIn)) {
                                $quantity = substr_count($whereIn, $row['productID']); //counts how often each product appears in the string    
                            }
                            $price = $row['productPrice'] * $quantity;
                            $totalPrice += $price;
                            
                        }
                        echo "
                        <div class='total_cont'>
                            <div class='total_title'>Total:</div>
                            <div class='total_price'>$ {$totalPrice}.00</div>
                        </div>
                        ";
                    }
                }
            ?>
            </div>
            <div class="cart_footer">
                <a class="remove_all_button" href="cartDelete.php">
                    <div class="remove_all">
                        Clear Cart
                    </div>
                </a>
                <div class="space"></div>
                <a class="checkout_button" href="checkout.php">
                    <div class="checkout">
                        Check Out
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>