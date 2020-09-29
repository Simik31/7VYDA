<?php

if(!isset($_SESSION)) {
    session_start();
    $_SESSION["error"] = "Pro přístup do systému se přihlašte.";
    header("Location: ../index.php");
    exit;
}

function connect()
{
    if($_SERVER['HTTP_HOST'] === "localhost") {
        $host = "";
        $username = "";
        $password = "";
        $database = "";
    }
    else {
        $host = "";
        $username = "";
        $password = "";
        $database = "";
    }

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_errno) {
        session_start();
        $_SESSION["error"] = "Failed to connect to MySQL: " . $conn->connect_error;
        header("Location: ../index.php");
        exit;
    }

    return $conn;
}
