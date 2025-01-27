<?php
    require 'loggedin.php' ;
    
    if (isset($_POST['register']))
    {
        $first_name = $_POST['first_name'] ;
        $last_name = $_POST['last_name'] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'] ;


        $sql = "INSERT INTO user_info (`first_name`, `last_name`, `email`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password');";

        $result = mysqli_query($conn,$sql);

        if($result)
        {
            header("Location: signin.php");
        }
        else
        {
            mysqli_error($conn);
        }
    }
    
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <title>Signup Form</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>


    <header>
        <?php
        include 'header.php';
        ?>
    </header>
    <main>
        <div class="container">
            <form action="" method="POST">
                <h1>Signup</h1>

                <div class="input-box">
                    <label for="first-name">First name</label>
                    <input type="text" id="first-name" name="first_name" required>
                </div>

                <div class="input-box">
                    <label for="last-name">Last name</label>
                    <input type="text" id="last-name" name="last_name" required>
                </div>

                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>


                <div class="input-box">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" name="register" class="btn">Signup</button>


                <div class="register-link">
                    <p>Already have an account ? <a href="/alfakhera/signin.php">Login</a></p>
                </div>

            </form>
        </div>
    </main>

</body>

</html>
