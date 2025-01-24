<?php
    require 'loggedin.php' ;
    if(isset($_POST['sendmessage']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql = "INSERT INTO contact_us(name, last_name, email, phone_number, message) VALUES ('$first_name','$last_name','$email','$phone','$message')";
        mysqli_query($conn,$sql);
        echo "
        <script>
        window.location.href = 'contactUs.php';
        alert('Your message has been sent, Thank you <3 ');
        </script>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<header>
    <?php
    include 'header.php' ;
    ?>
</header>

<main>
    <section>
        <div class="contact-info">
            <h2>Direct Contact Information:</h2>
            <p><strong>Address:</strong> Central Amman, near wholesale markets.</p>
            <p><strong>Phone:</strong>(06) 474 7288</p>
            <p><strong>Email:</strong> info@alfakhera.com</p>
            <h2>Business Hours:</h2>
            <p>Monday to Friday: 9 AM - 5 PM</p>
            <p>Saturday: 9 AM - 2 PM</p>
        </div>

        <div class="contact-form">
            <h2>Get in Touch</h2>
            <form method="post">
                <div class="name">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first_name" required>
        
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last_name" required>
                </div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
    
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
    
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
    
                <button type="submit" name="sendmessage">Submit</button>
            </form>
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
