<?php
    require 'loggedin.php' ;

    if(isset($_POST['login']))
    {
        $email = $_POST['email'] ;
        $password =$_POST['password'] ;
        $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' ;" ;

        $result = mysqli_query($conn,$sql);
    
        $loggedin = mysqli_fetch_assoc($result);

        if($loggedin)
        {
            
            $first_name = $loggedin['first_name'];
            $user_id = $loggedin['user_id'];
            $_SESSION['first_name'] = $first_name ;
            $_SESSION['user_id'] = $user_id ;
            $remember = isset($_POST['remember']);
            if($remember)
            {
                setcookie("email",$email,time() + 3600 * 24 *365);
                setcookie("password",$password,time() + 3600 * 24 *365);
                setcookie("remember",$remember,time() + 3600 * 24 *365) ;
                setcookie("first_name",$first_name,time() + 3600 * 24 *365);
                setcookie("user_id",$user_id,time() + 3600 * 24 *365);
            }
            else
            {
                setcookie("email","",time() - 36000);
                setcookie("password","",time()-36000);
                setcookie("remember",$remember,time() -36000) ;
                setcookie("first_name",$first_name,time() - 36000);
                setcookie("user_id",$user_id,time() - 36000);
            }
            header("Location: index.php");
        }
        else
        {
            print_r("Invalid email");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/signin.css">
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
                <h1>Login</h1>


                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>


                <div class="input-box">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>


                <div class="forget-remember">
                    <label><input type="checkbox" name="remember">remember me</label>
                    <!-- <a href="/forget-password">forget password?</a> -->
                </div>


                <button type="submit" name="login" class="btn">Login</button>


                <div class="register-link">
                    <p>don't have an account ? <a href="/alfakhera/signup.php">Signup</a></p>
                </div>

            </form>
        </div>
    </main>
    
<!-- bootStrap javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>