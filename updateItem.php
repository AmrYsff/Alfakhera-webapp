<?php

require 'connect.php';
session_start();
if (isset($_POST['updateOrder']))
{
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id'] ;
    $sql = "UPDATE orders SET quantity=$quantity WHERE product_id = $product_id and user_id = $user_id ;";
    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location: cart.php");
    } else {
        mysqli_error($conn);
    }
}


header ('Location: cart.php');


?>