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

        echo "Login: ".$_POST['login']."<br>";
        echo "Password: ".$_POST['password']."<br>";
        echo "Zapametaj: ".$_POST['remember']."<br>";

    ?>
</body>
</html>