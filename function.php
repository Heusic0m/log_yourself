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
