<?php
    session_start();
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
    <h2>Twoje produkty</h2>

    <?php
    
        if(isset($_SESSION['koszyk'])) {
            echo "<ul>";

            foreach ($_SESSION['koszyk'] as $produkt) {
                echo "<li> $produkt </li>";
            }

            echo "</ul>";
        }else {
            echo "<p>BRAK PRODUKTÓW</p>";
        }
    
    ?>

    <a href="index.php">Przejdź do listy produktów</a>
</body>
</html>