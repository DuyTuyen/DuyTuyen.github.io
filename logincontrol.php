<?php


if (count($_POST) > 0) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "duytuyen@gmail.com" && $password == "12345") {
        session_start();
        $_SESSION["user_name"] = $username;
       header("Location: index.php");
       
    }
}
?>