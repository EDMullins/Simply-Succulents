<?php
    //DB connection
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/extra.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Simply Succulents</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
    </style>
</head>
<body>
    <a id="top_of_page"></a>
<?php
    require 'includes/header.php'
?>
<!-- side nav -->
    <div id="sidenav" class="sidenav">
        <a href="#pots-of-page" id="pots" class="">Pots</a>
        <a href="#supp-of-page" id="supp" class="">Supplies</a>
        <a href="#merch-of-page" id="merch" class="">Merch</a>
        <a href="#deals-of-page" id="deals" class="">Deals</a>
    </div>
<!-- /side nav -->
    <a id="pots-of-page"></a>
    <div class="prod_sect" id="pots_sect">
        <div class="ft_prod">
            <h1>Pots</h1>
        </div>
        <div class="prod_cont">
<!-- products using php -->
            <?php
            $sql = "SELECT * FROM products WHERE productCat='pot';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                //prints the query results found
                while($row = mysqli_fetch_array($result)) {
                    $id = $row['productID'];
                    $_GET['aid'] = $id;
                    echo 
                    "<div class='prod_card'>
                        <div class='prod_title'>{$row['productName']}</div>
                        <div class='prod_img'>
                            <img src='{$row['productImage']}'>
                        </div>
                        <div class='prod_text'>$ {$row['productPrice']}</div>
                        <a class='prod_btn' href='addAction.php?id={$row['productID']}'>Buy Now</a>
                    </div>";
                }
            } else{
                echo "No values in database.";
            }

            ?>
<!-- /products using php -->
        </div>
    </div>
    <br>
    <a id="supp-of-page"></a>
    <div class="prod_sect" id="supp_sect">
        <div class="ft_prod">
            <h1>Growing Supplies</h1>
        </div>
        <div class="prod_cont">
<!-- products using php -->
            <?php
            $sql = "SELECT * FROM products WHERE productCat='supply';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                //prints the query results found
                while($row = mysqli_fetch_array($result)) {
                    $id = $row['productID'];
                    $_GET['aid'] = $id;
                    echo 
                    "<div class='prod_card'>
                        <div class='prod_title'>{$row['productName']}</div>
                        <div class='prod_img'>
                            <img src='{$row['productImage']}'>
                        </div>
                        <div class='prod_text'>$ {$row['productPrice']}</div>
                        <a class='prod_btn' href='addAction.php?id={$row['productID']}'>Buy Now</a>
                    </div>";
                }
            } else{
                echo "No values in database.";
            }
            ?>
<!-- /products using php -->
        </div>
    </div>
    <br>
    <a id="merch-of-page"></a>
    <div class="prod_sect" id="merch_sect">
        <div class="ft_prod">
            <h1>Merch</h1>
        </div>
        <div class="prod_cont">
<!-- products using php -->
            <?php
            $sql = "SELECT * FROM products WHERE productCat='merch';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                //prints the query results found
                while($row = mysqli_fetch_array($result)) {
                    $id = $row['productID'];
                    $_GET['aid'] = $id;
                    echo 
                    "<div class='prod_card'>
                        <div class='prod_title'>{$row['productName']}</div>
                        <div class='prod_img'>
                            <img src='{$row['productImage']}'>
                        </div>
                        <div class='prod_text'>$ {$row['productPrice']}</div>
                        <a class='prod_btn' href='addAction.php?id={$row['productID']}'>Buy Now</a>
                    </div>";
                }
            } else{
                echo "No values in database.";
            }
            ?>
<!-- /products using php -->
        </div>
    </div>
    <br>
    <a id="deals-of-page"></a>
    <div class="prod_sect" id="deals_sect">
        <div class="ft_prod">
            <h1>Deals</h1>
        </div>
        <div class="prod_cont">
<!-- products using php -->
            <?php
            $sql = "SELECT * FROM products WHERE productID='13';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                //prints the query results found
                while($row = mysqli_fetch_array($result)) {
                    $id = $row['productID'];
                    $_GET['aid'] = $id;
                    echo 
                    "<div class='prod_card'>
                        <div class='prod_title'>{$row['productName']}</div>
                        <div class='prod_img'>
                            <img src='{$row['productImage']}'>
                        </div>
                        <div class='prod_text'>$ {$row['productPrice']}</div>
                        <a class='prod_btn' href='addAction.php?id={$row['productID']}'>Buy Now</a>
                    </div>";
                }
            } else{
                echo "No values in database.";
            }

            $sql = "SELECT * FROM products WHERE productID='27';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                //prints the query results found
                while($row = mysqli_fetch_array($result)) {
                    $id = $row['productID'];
                    $_GET['aid'] = $id;
                    echo 
                    "<div class='prod_card'>
                        <div class='prod_title'>{$row['productName']}</div>
                        <div class='prod_img'>
                            <img src='{$row['productImage']}'>
                        </div>
                        <div class='prod_text'>$ {$row['productPrice']}</div>
                        <a class='prod_btn' href='addAction.php?id={$row['productID']}'>Buy Now</a>
                    </div>";
                }
            } else{
                echo "No values in database.";
            }

            $sql = "SELECT * FROM products WHERE productID='33';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                //prints the query results found
                while($row = mysqli_fetch_array($result)) {
                    $id = $row['productID'];
                    $_GET['aid'] = $id;
                    echo 
                    "<div class='prod_card'>
                        <div class='prod_title'>{$row['productName']}</div>
                        <div class='prod_img'>
                            <img src='{$row['productImage']}'>
                        </div>
                        <div class='prod_text'>$ {$row['productPrice']}</div>
                        <a class='prod_btn' href='addAction.php?id={$row['productID']}'>Buy Now</a>
                    </div>";
                }
            } else{
                echo "No values in database.";
            }
            ?>
<!-- /products using php -->
        </div>
    </div>
    <br>
<?php
    require 'includes/footer.php'
?>
</body>
</html>