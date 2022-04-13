<?php
//create connection
$servername = "localhost:3306";
$dbUsername = "cchs_hmcmahan";
$dbPassword = "eagles";
$dbDatabase = "cchs_hmcmahan";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbDatabase);
if ($conn->connect_error) {
    die("Connection failed: {$conn->connect_error}");
}
?>