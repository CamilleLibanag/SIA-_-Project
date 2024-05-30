<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['Account_type'] !== '0') {
    header("Location: login.php");
    exit();
}
include("Connections.php");
$admin_email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamil</title>
</head>
<style>
    .welcome{
        font-size: 100px;
        text-align: center;
    }
    .logout{
        margin: 50%;
    }
</style>
<body>
    <h2 class="welcome">Welcome To Kamil User World!</h2>
    
    <a class="logout" href="login.php"><button>Logout</button></a>
</body>
</html>