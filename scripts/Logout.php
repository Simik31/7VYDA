<?php
session_start();
$_SESSION["error"] = "";
$_SESSION["success"] = "";
$_SESSION["logged"] = "";
$_SESSION["ID"] = "";
$_SESSION["role"] = "";
$_SESSION["Name"] = "";
$_SESSION["index"] = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];
if($_SERVER['HTTP_HOST'] === 'localhost') {
    $_SESSION["index"] .= "/Seminarka/";
}
session_destroy();
header("Location: ../index.php");