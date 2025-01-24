<?php
    require 'loggedin.php' ;
    $user_id = $_SESSION['user_id'] ;
    $sql = "DELETE FROM orders WHERE user_id = $user_id" ;
    mysqli_query($conn,$sql);

    echo "
        <script>
        window.location.href = 'index.php';
        alert('Your order has been placed, Thank you <3');
        </script>
        ";
?>