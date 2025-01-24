<?php
    if(isset($_SESSION['first_name']))
    {
        $first_name = $_SESSION['first_name'];
    }   
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="/css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="index.php">Alfakhera</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Alfakhera</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" aria-current="page" href="/alfakhera/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="/alfakhera/products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="/alfakhera/contactUs.php">Contact us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="/alfakhera/cart.php">Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
    
            <?php
                if(isset($_COOKIE['email']) || isset($_SESSION['first_name']))
                {
                    echo "
                    <div class='first-name'>Hello, $first_name</div>
                    <a href='/alfakhera/logout.php' class='login-button'>Logout</a>" ;
                }
                else
                {
                    echo "<a href='/alfakhera/signin.php' class='login-button'>Login</a>" ;
                }
            ?>
            

            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->


    <!-- bootStrap javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>