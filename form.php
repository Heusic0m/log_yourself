<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="login.php" class="login" type="url" name="login" value="login">
        <button class="log">login</button>
    </a>

    <form method="POST" action="function.php">
        <h1>Registration</h1>

        <input class="username" type="text" placeholder="username" required name="username">
        <input class="email" type="email" placeholder="email" required name="email">
        <input class="password" type="password" placeholder="password" required name="password">
        <input class="first_name" type="text" placeholder="first-name" required name="first_name">
        <input class="last_name" type="text" placeholder="last-name" required name="last_name">
        <input class="linkedin" type="url" placeholder="linkedin" name="linkedin">
        <input class="github" type="url" placeholder="github" name="github"><br>

        <input class="clear" type="reset" value="clear" name="clear"></>
        <input class="submit" type="submit" name="submit" value="Connect">


    </form>

</body>

</html>