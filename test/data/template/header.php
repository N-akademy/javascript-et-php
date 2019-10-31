<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super site</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>

    <ul>
        
        <li><a class="tracking-in-expand-fwd-bottom"  href="index.php">Accueil</a></li>
        <li><a class="tracking-in-expand-fwd-bottom" href="contact.php">Contact</a></li>
        <?php 
            if (isset($_SESSION) && !empty($_SESSION)){
        ?>
                <li class="tracking-in-expand-fwd-bottom">
        <?php
                echo("Bonjour,$_SESSION[user_name]");

        ?>
                </li>
        <?php
            }else { 
        ?>
                <li><a class="tracking-in-expand-fwd-bottom" href="register.php">Inscription</a></li>
        <?php
            }
        ?>    



    </ul>
    
    <br>
</main>


<!-- echo $_SESSION["username"];

echo "Bonjour, $_SESSION[username]"; -->





   