<?php
session_start();
session_unset();
setcookie("email", "", time() - 36000);
setcookie("password", "", time() - 36000);
setcookie("remember", $remember, time() - 36000);
session_destroy();
header("Location: index.php");
?>
