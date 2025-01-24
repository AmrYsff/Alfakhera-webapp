<?php
   require 'loggedin.php';

   if(isset($_SESSION['first_name']))
   {
        $product_id = $_GET['product_id'];
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM orders WHERE product_id = $product_id and user_id = $user_id;";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            $sql = "UPDATE orders SET quantity = quantity + 1 WHERE 1;";
            $result = mysqli_query($conn,$sql);
        }
        else
        {
            $sql = "INSERT INTO orders(product_id, user_id, quantity) VALUES ($product_id,$user_id, 1 );";
            $result = mysqli_query($conn,$sql);
        }
        echo "
        <script>
        window.location.href = 'products.php';
        alert('product has been added successfully ✔');
        </script>
        ";
   }
   else
   {
    echo "
        <script>
        window.location.href = 'signin.php';
        alert('please sign in first');
        </script>
        ";
   }
   exit;
?>