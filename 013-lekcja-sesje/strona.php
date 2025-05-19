<?php
    $pathToIndex="location:\at21mleczkom\aplikacje-internetowe-2024-2025\lekcja-013-sesje\index.php";
    session_start();
    if(!isset($_SESSION['uzytkownik'])){ // jeżeli niezalogowany użytkownik próbuje otworzyć strone
        header($pathToIndex); // przekierój na index
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Login zalogowanego użytkownika -->

    <h1>

        <?php

            echo $_SESSION['uzytkownik'];
    
        ?>

    </h1>

    <p>Jesteś na stronie głównej</p>
    <p>Przed opuszczeniem strony <b>wyloguj się</b></p>
    <a href="wyloguj.php">Wyloguj</a>

</body>
</html>