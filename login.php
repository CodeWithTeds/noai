<?php
include_once 'config/Database.php';
include_once 'model/user-function.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <label for="user_name">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="user_pass">Password</label>
        <input type="password" name="user_pass" id="user_pass" required>

        <input type="submit" class="btn btn-primary" value="login">

    </form>
</body>

</html>