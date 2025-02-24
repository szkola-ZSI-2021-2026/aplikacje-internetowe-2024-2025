<?php
    if(!isset($_COOKIE['dane'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Imie</h1>
    <form action="przeslij-imie.php" method="post">
        <input type="text" name="name" placeholder="Podaj imie">
        <input type="submit">
    </form>

    <?php
    
    } else {
        echo "Witaj ponownie ".$_COOKIE['dane']."<br>";
    }
    
    ?>
</body>
</html>