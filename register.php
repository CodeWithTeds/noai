<?php
require_once 'config/Database.php';
require_once 'model/user-function.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = new Database();
$user = new UserFunction($db);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['user_name'];
    $firstname = $_POST['first_name'];
    $user_pass = $_POST['user_pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if($user_pass === $confirm_pass){
        if($user->register($username, $firstname, $user_pass, $confirm_pass))
        {
            echo "<script>alert('Register success');</script>";
        
        } else {
            echo "<script>alert('Register failed: Check error logs');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" id="id" name="id">
        <label for="user_name">Username</label>
        <input type="text" name="user_name" id="user_name" required>

        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="user_pass">Password</label>
        <input type="password" name="user_pass" id="user_pass" required>

        <label for="confirm_pass">Confirm password</label>
        <input type="password" name="confirm_pass" id="confirm_pass" required>

        <input type="submit" class="btn btn-primary" value="register">

    </form>
</body>
</html>