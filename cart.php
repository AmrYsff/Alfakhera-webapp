<?php
require 'loggedin.php';
if (isset($_SESSION['first_name'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM orders INNER JOIN products
        on products.product_id = orders.product_id 
        WHERE user_id = $user_id;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        echo "
        <script>
        window.location.href = 'products.php';
        alert('The cart is empty, please add products to view cart');
        </script>
        ";
    }
} else {
    echo "
        <script>
        window.location.href = 'signin.php';
        alert('please sign in first');
        </script>
        ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <header>
        <?php
        include 'header.php';
        ?>
    </header>

    <main>
        <section>
            <div class="title">
                <h2>Shopping Cart</h2>
            </div>
        </section>

        <section>
            <div class="cart">
                <?php
                $total = 0;
                foreach ($products as $product) {
                    $product_id = $product['product_id'];
                    $product_img = $product['product_img'];
                    $product_name = $product['product_name'];
                    $quantity = $product['quantity'];
                    $product_price = $product['product_price'] * $quantity;
                    $total += $product_price;
                    $base64Image = 'data:image/jpeg;base64,' . base64_encode($product_img);
                    echo "  <div class='products'>
                                        <img src='$base64Image' alt='$product_name image'>
                                        <p>$product_name</p>
                                        <div class='update'>
                                            <form action='updateItem.php' method='post'>
                                                <input type='number' name='quantity' value='$quantity'>
                                                <input type='hidden' name='product_id' value='$product_id'>
                                                <button type='submit' name='updateOrder' class='btn' id = 'update'>Update</button>
                                            </form>
                                        </div>
                                        <p>Price: $product_price JOD</p>
                                        <a href='delete.php?product_id=$product_id' class='btn' id = 'delete'>Delete</a>
                                    </div>
                            ";
                }
                echo "
                        <div class='total'>
                            <p>Total: $total JOD</p>
                            <a href='checkout.php' class='btn' id ='update'>Check out</a>
                        </div>
                        ";
                ?>

            </div>
        </section>

    </main>
    
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

</html>