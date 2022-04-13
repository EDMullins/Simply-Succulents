<?php
    //DB connection
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href = "css/style.css" type = "text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Succulents</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
    </style>
</head>
<body>
    <a id="top_of_page"></a>
    <?php
        require 'includes/titleheader.php';
    ?>
    <div class="prod_sect">
        <div class="ft_prod">
            <h1>Featured Products</h1>
        </div>
        <div class="prod_cont">
<!-- products using php -->
            <?php
            $sql = "SELECT * FROM products LIMIT 3;";
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
                        <a class='prod_btn' href='addAction.php?id={$row['productID']}'>buy now</a>
                    </div>
                    
                    ";
                }
            } else{
                echo "No values in database.";
            }

            $conn->close();
            ?>
<!-- /products using php -->
        </div>
    </div>
<br>
    <div class="char_sect">
        <div class="char_head">
        <h1>Our Contributions</h1>    
        </div>
        <div class="char_logo">
            <img src="images/char_logo.svg" alt="Charity Logo" class="center">
        </div>
        <div class="char cont">
            <div class="char_card">
                <div class="char_desc">One Tree Planted is a 501(c)(3) non-profit organization. As an environmental charity, they're on a mission to make it simple for anyone to help the environment by planting trees!</div>
                <br>
                <div class="char_desc">We donate 10% of all purchases to One Tree Planted.</div>
                <div class="char_link">
                <br>
                    <a href="https://onetreeplanted.org/collections/all" target="_blank">Donate Here!</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php
        require 'includes/footer.php'
    ?>
</body>
</html>