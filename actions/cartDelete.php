<?php
    session_start();
    require "connect.php";

    unset($_SESSION['cart']);
?>
<meta http-equiv="Refresh" content="0,url='cart.php'">