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


 <?php

    function openConnection()
    {
        // Try to figure out what these should be for you
        $dbhost = "remotemysql.com";
        $dbuser = "1f0PkAhKMD";
        $dbpass = "LpoKzOb6Uh";
        $db = "1f0PkAhKMD";

        // Try to understand what happens here
        $pdo = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);

        // Why we do this here
        return $pdo;
    }



    /* 
     if (isset($_POST["username"])) {
            $username = $_POST["username"];
        }
        $email = isset($_POST['email']) ? $_POST['email'] : NULL;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $bad_email = "Adresse email invalide";
        } else {
            $bad_email = "";
        }
        if (isset($_POST['password']))
            $password = $_POST["password"]; */
    /* echo password_hash($password, PASSWORD_DEFAULT);  // Affiche le mot de passe crypté */

    try {

        if ($_POST["submit"]) {

            $username = $_POST["username"];
            $email =  $_POST['email'];
            $password = $_POST['password'];
            $firstname = $_POST["first_name"];
            $lastname = $_POST["last_name"];
            $linkedin = $_POST["linkedin"];
            $github = $_POST["github"];


            $pdo = openConnection();

            $sql = "INSERT INTO student (id, username, email, password, first_name, last_name, linkedin, github) VALUES (NULL,?,?,?,?,?,?,?);";
            $result = $pdo->prepare($sql)->execute([$username, $email, $password, $firstname, $lastname, $linkedin, $github]);

            echo "Your information has been sent " . "<br>" . '<a href="registration.php">Come back to home to log in</a>';
        }
    } catch (Exception  $e) {
        echo "Not ok";
    }
