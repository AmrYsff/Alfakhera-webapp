<?php
require 'loggedin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mohamed Mousa Amro and his partners company is a partnership Company Registered in the Ministry of
                    Industry and Trade under the name of (Alfakherah traiding), this company Specialize in importing food products and sell in the wholesale market">
    <meta name="keywords" content="alfakhira trading, alfakhera trading, wholesale company, hajeh rice, princesses rice, Mohammad Amro company">
    <meta name="keywords" content="رز الاميرات, رز الحجة, شركة محمد موسى عمرو, طن ريو جاردن, وادي الرمم, مواد تموينية, مواد غذائية, تجارة بالجملة">
    <meta name="author" content="Yousef Amr">
    <title>Alfakhera trading group</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
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
                    <h1>About Alfakhera Trading Group</h1>
                </div>
            </div>
        </section>


        <section>
            <div class="headlines">
                <h3>Overview</h3>
            </div>
            <div class="text">
                <p>Mohamed Mousa Amro and his partners company is a partnership Company Registered in the Ministry of
                    Industry and Trade under the name of (Alfakherah traiding).
                    It is a Family company which is controlled by seven brothers each of them is taking part in
                    controlling and organizing the work of the company with the help of other workers.</p>
            </div>

            <div class="card-container">
                <div class="card">
                    <img src="assets/6237416.jpg" alt="import export photo">
                    <p>specialized in importing, exporting, and distributing high quality products</p>
                </div>


                <div class="card">
                    <img src="assets/squaredslaes.png" alt="Sales photo">
                    <p>High Net Sales, Low Profit Model</p>
                </div>

                <div class="card">
                    <img src="assets/white-sumpermarkt.jpg" alt="market photo">
                    <p>Serving Supermarkets, Minimarkets, Cafeterias, and Restaurants.</p>
                </div>
            </div>

        </section>


        <section>
            <div class="headlines">
                <h3>Our history</h3>
            </div>

            <div class="history-text">
                <h4>Company Timeline:</h4>
                <p>1955: Mousa Amro’s Company established in Al-Tafilah, Jordan.</p>
                <p>1997: Alfakhera Trading Company launched in Amman as a food trading subsidiary.</p>
            </div>

            <div class="circle-container">
                <div class="circle">Al-Tafilah <br> 1955</div>


                <div class="circle">Amman <br> 1997</div>
            </div>
        </section>

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
