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

        session_start();

        echo "<b>ID sesji: </b>".session_id();

    ?>

    <h2>Licznik odwiedzin</h2>

    <?php
    
        //$_SESSION['ile'] = 0;
        
        echo "<p>Licznik odwiedzin: <b>".$_SESSION['ile']."</b></p>";
    
        if(!isset($_SESSION['ile'])) {
            $_SESSION['ile'] = 0;
        } else {
            $_SESSION['ile']++;
        }

    ?>

    <hr>
    <h2>Uwierzytelnianie użytkownika</h2>
    <form action="" method="post">
        <label for="login">Login</label>
        <input type="text" name="login" id="login"> <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"> <br>

        <input type="submit" value="LOG IN">
    </form>
    
    <br>
    <br>

    <?php
        if(!empty($_POST['login'])){
            echo "Login: ".$_POST['login']."<br>";
        }
        if(!empty($_POST['password'])){
            echo "Password: ".$_POST['password']."<br>";
        }
    ?>
    <hr>

    

</body>
</html>