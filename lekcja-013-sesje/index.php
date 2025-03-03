<?php
    $pathToMainSite="location:\at21mleczkom\aplikacje-internetowe-2024-2025\lekcja-013-sesje\strona.php";

    session_start();
    if(isset($_SESSION['uzytkownik'])){ // jeżeli użytkownik jest zalogowany
       header($pathToMainSite); // przekierój do strony głównej
    }else if(isset($_POST['login']) && isset($_POST['password'])){
        if($_POST['login']=='janek' && $_POST['password']=='jan123') {
            $_SESSION['uzytkownik'] = 'janek'; // ustawienie zmiennej sesyjnej
            header($pathToMainSite);
        }else {
            echo "NIEPRAWIDŁOWE DANE LOGOWANIA <br>";
            echo "Podpowiedź: <br>";
            echo "login: janek <br>";
            echo "haslo: jan123 <br>";
        }
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
    
    <h1>Sesje</h1>
    <h2>ID sesji</h2>

    <?php

        // session_start();

        echo "<b>ID sesji: </b>".session_id();

    ?>

    <h2>Licznik odwiedzin</h2>

    <?php
    
        //$_SESSION['ile'] = 0;   
        if(!isset($_SESSION['ile'])) {
            $_SESSION['ile'] = 0;
        } else {
            $_SESSION['ile']++;
        }
        
        echo "<p>Licznik odwiedzin: <b>".$_SESSION['ile']."</b></p>";


    ?>

    <hr>
    <h2>Uwierzytelnianie użytkownika</h2>
    <form action="" method="post">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">

        <label for="password">Hasło</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="LOG IN" class="button">
    </form>
    
    <br>
    <br>

    <?php
        if(!empty($_POST['login'])){
            echo "Login: ".$_POST['login']."<br>";
        }
        if(!empty($_POST['password'])){
            echo "Hasło: ".$_POST['password']."<br>";
        }
    ?>
    <hr>

    <h2>Koszyk</h2>
    <p>Lista produktów</p>
    <form action="" method="get" class="koszyk">

        <input type="checkbox" name="lista[]" id="klawiatura" value="klawiatura"> <label for="klawiatura">klawiatura</label><br>
        <input type="checkbox" name="lista[]" id="myszka" value="myszka"> <label for="myszka">myszka</label><br>
        <input type="checkbox" name="lista[]" id="glosniki" value="glosn iki"> <label for="glosniki">glosniki</label> <br>
        <input type="checkbox" name="lista[]" id="sluchawki" value="sluchawki"> <label for="sluchawki">sluchawki</label> <br>
        <input type="checkbox" name="lista[]" id="drukarka" value="drukarka"> <label for="drukarka">drukarka</label> <br>
        <input type="checkbox" name="lista[]" id="monitor" value="monitor"> <label for="monitor">monitor</label> <br>
        <input type="checkbox" name="lista[]" id="telewizor" value="telewizor"> <label for="telewizor">telewizor</label> <br>
        <input type="checkbox" name="lista[]" id="laptop" value="laptop"> <label for="laptop">laptop</label> <br>

        <input type="submit" value="Dodaj do koszyka" class="button">
    </form>
    <a href="koszyk.php">Przejdź do koszyka</a>
    <br>

    <?php
        // explode() - ze stringa tablica
        // implode() - z tablicy string
    
        if(isset($_GET['lista'])) {
            echo "wybrane produkty zostały dodane do koszyka";
            if(!empty($_SESSION['koszyk'])) {
                // jeśli koszyk nie jest pusty dodajemy kolejne produkty
                $koszyk = array_unique(array_merge($_SESSION['koszyk'], $_GET['lista']));
                $_SESSION['koszyk'] = $koszyk;

            }else {
                $_SESSION['koszyk'] = $_GET['lista'];
            }
        }

    ?>
</body>
</html>