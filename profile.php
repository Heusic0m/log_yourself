<?php
include "function.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="profile.css">
    <title>Document</title>
</head>

<body>
    <div class="column">
        <h1>Profile editor</h1>
        <input class="username" type="text" placeholder="username" required name="username">
        <input class="email" type="email" placeholder="email" required name="email">
        <input class="password" type="password" placeholder="password" required name="password">
        <input class="first_name" type="text" placeholder="first-name" required name="first_name">
        <input class="last_name" type="text" placeholder="last-name" required name="last_name">
        <input class="linkedin" type="url" placeholder="linkedin" name="linkedin">
        <input class="github" type="url" placeholder="github" name="github"><br>

        <button class="clear" type="reset" value="clear" name="suppress">clear profile</button>
        <button class="submit" type="submit" name="edit" value="edit">submit</button>
    </div>

</body>

</html>