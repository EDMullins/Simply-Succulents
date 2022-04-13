<?php
    //DB connection
    require 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/shop.css" type="text/css">
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
    require 'includes/header.php';
?>
<!-- Shop Page -->
    <div class="shop_page">
        <div class="prod_sect">
            <div class="ft_prod">
                <h1>All Succulents</h1>
            </div>
            <div class="prod_cont">
<!-- products using php -->
            <?php
            $sql = "SELECT * FROM products WHERE productCat='plant';";
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

            $conn->close();
            ?>
<!-- /products using php -->
            </div>
        </div>
    </div>
<!-- /Shop Page -->
<br>
<?php
    require 'includes/footer.php'
?>
</body>
</html>