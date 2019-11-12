<?php
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylelog.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="bloc">
        <form>
            <h1>login</h1>
            <input class="username" type="text" placeholder="username" required name="username">
            <input class="password" type="password" placeholder="password" required name="password">

            <a href="function.php" class="login" type="url" name="login" value="login" action="function.php">
                <button class="profile">login</button>
            </a>

        </form>
        <div class="bloc2"></div>
    </div>
</body>

</html>