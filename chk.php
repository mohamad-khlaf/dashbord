<?php

    session_start();
    $admins = array("osama", "ahmad", "hhh");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $user = $_POST["user"];
        if (in_array($user,$admins)) {
            $_SESSION["user"] = $user;
            echo "مرحبا" . $_SESSION["user"] . "سيتم تحويلك الى لوحة التحكم"; // username
            header("REFRESH:5,URL=dashbord.html");

        } else {
            echo "you are not admin and username is " . $_POST["user"];
        }

    } else {
        ECHO " ERROR: you are false";
    }