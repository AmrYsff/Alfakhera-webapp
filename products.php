<?php

 require 'loggedin.php' ;

$sql = "SELECT * FROM categories;";
$result = mysqli_query($conn, $sql);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfakhera Products</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/products.css">
</head>

<body>

    <header>
        <?php
        include('header.php');
        ?>
    </header>

    <main>

        <section>
            <div class="hero-imgage">
                <div class="herotext">
                    <h1>Explore Our Products</h1>
                </div>
            </div>
        </section>


        <?php
        foreach ($categories as $category) {
            // print_r($category);
            $category_id = $category['category_id'];
            $category_name = $category['category_name'];
            $sql = "SELECT * FROM products WHERE category_id = $category_id;";
            $result = mysqli_query($conn, $sql);
            $num_of_products = mysqli_num_rows($result);
            if ($num_of_products > 0) {
                echo "<section>
            <div class='head-lines'>
                <h2>$category_name</h2>
            </div>
                <div class='card-container'>
            ";

                $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach ($products as $product) {
                    $product_id = $product['product_id'];
                    $product_name = $product['product_name'];
                    $product_price = $product['product_price'];
                    $product_img = $product['product_img'];
                    $base64Image = 'data:image/jpeg;base64,' . base64_encode($product_img);

                    echo "
                    <div class='card'>
                    <img src='$base64Image' alt='$product_name photo'>
                    <div class='card-content'>
                        <h3>$product_name</h3>
                        <p>Price: $product_price JOD</p>

                        <a href='addToCart.php?product_id=$product_id' class='btn'>Add to cart</a>
                    </div>

                </div>
                    ";

                }
            }


            echo "</div>
            </section>";
        }
        ?>


        <!-- <section>
            <div class="head-lines">
                <h2>Rice</h2>
            </div>
            <div class="card-container">

                <div class="card">
                    <img src="../assets/hajeh rice image.jpg" alt="Hajeh rice photo">
                    <div class="card-content">
                        <h3>Hajeh rice</h3>
                        <p>Price: 75 JOD</p>

                        <a href="" class="btn">Add to cart</a>
                    </div>

                </div>
            </div>
        </section>


        <section>
            <div class="head-lines">
                <h2>Canned food</h2>
            </div>
            <div class="card-container">

                <div class="card">
                    <img src="/assets/hajeh rice image.jpg" alt="Hajeh rice photo">
                    <div class="card-content">
                        <h3>Hajeh rice</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id excepturi sit ipsa,
                            exercitationem aspernatur quas voluptatibus odio recusandae, expedita laboriosam voluptatum
                            suscipit similique veritatis labore voluptatem inventore sed nesciunt totam!</p>

                        <a href="" class="btn">Add to cart</a>
                    </div>

                </div>

                <div class="card">
                    <img src="/assets/alameerat rice.jpg" alt="Sales photo">
                    <div class="card-content">
                        <h3>Princesses rice</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id excepturi sit ipsa,
                            exercitationem aspernatur quas voluptatibus odio recusandae, expedita laboriosam voluptatum
                            suscipit similique veritatis labore voluptatem inventore sed nesciunt totam!</p>

                        <a href="" class="btn">Add to cart</a>
                    </div>

                </div>

                <div class="card">
                    <img src="/assets/Alameera rice.jpg" alt="market photo">
                    <div class="card-content">
                        <h3>Princess rice</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id excepturi sit ipsa,
                            exercitationem aspernatur quas voluptatibus odio recusandae, expedita laboriosam voluptatum
                            suscipit similique veritatis labore voluptatem inventore sed nesciunt totam!</p>
                        <a href="" class="btn">Add to cart</a>
                    </div>

                </div>
            </div>
        </section>



        <section>
            <div class="head-lines">
                <h2>Oils</h2>
            </div>
            <div class="card-container">

                <div class="card">
                    <img src="/assets/hajeh rice image.jpg" alt="Hajeh rice photo">
                    <div class="card-content">
                        <h3>Hajeh rice</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id excepturi sit ipsa,
                            exercitationem aspernatur quas voluptatibus odio recusandae, expedita laboriosam voluptatum
                            suscipit similique veritatis labore voluptatem inventore sed nesciunt totam!</p>

                        <a href="" class="btn">Add to cart</a>
                    </div>

                </div>

                <div class="card">
                    <img src="/assets/alameerat rice.jpg" alt="Sales photo">
                    <div class="card-content">
                        <h3>Princesses rice</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id excepturi sit ipsa,
                            exercitationem aspernatur quas voluptatibus odio recusandae, expedita laboriosam voluptatum
                            suscipit similique veritatis labore voluptatem inventore sed nesciunt totam!</p>

                        <a href="" class="btn">Add to cart</a>
                    </div>

                </div>

                <div class="card">
                    <img src="/assets/Alameera rice.jpg" alt="market photo">
                    <div class="card-content">
                        <h3>Princess rice</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id excepturi sit ipsa,
                            exercitationem aspernatur quas voluptatibus odio recusandae, expedita laboriosam voluptatum
                            suscipit similique veritatis labore voluptatem inventore sed nesciunt totam!</p>
                        <a href="" class="btn">Add to cart</a>
                    </div>

                </div>
            </div>
        </section> -->
    </main>

    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>

    <!-- bootStrap javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>

</html>
