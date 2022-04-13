<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/review.css" type="text/css">
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
<div class="review_cont">
    <div class='reviewCard'>
        <div class='reviewName title'>Name</div>
        <div class='reviewContent title'>Review</div>
        <div class='reviewRating title'>Rating 1-5</div>
    </div>
<!-- reviews using php -->
<?php
    require 'connect.php';

    $sql = "SELECT * FROM reviews ORDER BY reviewRating DESC;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
    //prints the query results found
        while($row = mysqli_fetch_array($result)) {
            $id = $row['reviewID'];
            $_GET['aid'] = $id;
            echo 
            "
            <div class='reviewCard'>
                <div class='reviewName'>{$row['reviewName']}</div>
                <div class='reviewContent'>{$row['reviewContent']}</div>
                <div class='reviewRating rating_{$row['reviewRating']}'>{$row['reviewRating']}</div>
            </div>
            ";
        }
    } else{
        echo "No values in database.";
    }

$conn->close();
?>
<!-- /reviews using php -->
</div>
<?php
    require 'includes/footer.php'
?>
</body>
</html>