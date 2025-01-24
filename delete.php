<?php

require 'connect.php';
session_start();

$product_id = $_GET['product_id'];
$user_id = $_SESSION['user_id'] ;
$sql = "DELETE FROM orders WHERE product_id = $product_id and user_id = $user_id ;";

$result = mysqli_query($conn,$sql);


header ('Location: cart.php');


?>