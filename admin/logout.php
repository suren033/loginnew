<?php
    session_start();

    if (isset($_POST["button"])) {
        session_destroy();
        unset($_SESSION["usernmae"]);
        unset($_SESSION["password"]);
        header("location: login/login.php");
    }
?>