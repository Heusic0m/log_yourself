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

        if (isset($_POST["submit"])) {

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

            echo "Your information has been sent " . "<br>" . '<a href="form.php">Come back to home to log in</a>';
        }
    } catch (Exception  $e) {
        echo "Not ok";
    }
