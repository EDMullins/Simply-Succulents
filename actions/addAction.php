<?php
    // starts session
    session_start();

    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array(); // sets this session variables as an array
    }

    array_push($_SESSION['cart'],$_GET['id']); //adds the id from the url to the array called cart
?>
<meta http-equiv="Refresh" content="0,url='cart.php'">