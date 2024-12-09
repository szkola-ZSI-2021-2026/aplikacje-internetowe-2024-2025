<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dane logowania</h1>
    <?php

        echo "Login: <b>".$_POST['login']."</b><br>";
        echo "Password: <b>".$_POST['password']."</b><br>";
        // echo "Zapametaj: ".$_POST['remember']."<br>";

        echo "Czy zapamientano: ";
        if(isset($_POST['remember'])){
            echo "<b>zapamientano</b><br>";
        } else {
            echo "<b>nie zapamientano</b><br>";
        }
    ?>

    <br>
    <hr>
    <a href="logowanie.html">
        <button>Wyloguj</button>
    </a>
</body>
</html>