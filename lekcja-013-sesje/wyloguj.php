<?php
    $pathToIndex="location:\at21mleczkom\aplikacje-internetowe-2024-2025\lekcja-013-sesje\index.php";
    session_start();
    if(isset($_SESSION['uzytkownik'])){
        unset($_SESSION['uzytkownik']); // zwalnianie zmiennej sesyjnej
    }else {
        header($pathToIndex); // jeżeli użytkownik nie jest zalogowany przekierój do index
    }
    session_destroy();
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
    <p>Wylogowałeś się</p>
    <a href="index.php">Logowanie</a>
</body>
</html>