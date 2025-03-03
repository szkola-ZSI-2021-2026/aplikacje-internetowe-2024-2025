<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stacja paliw</h1>
    <form action="stacja-paliw.php" method="get">
        <p>
            koszt benzyny za 1l w zł
            <input type="number" name="price">
        </p>
        <p>
            Ilość kilometrów do przejehania
            <input type="number" name="distance">
        </p>
        <p>
            Srednie spalanie na 100km
            <input type="number" name="spalanie">
        </p>

        <input type="submit" value="Oblicz">
    </form>
    <hr>
    
    <?php
        //  wypisz czytelnie dane wpisane przez użytkownika, a potem oblicz koszt przejazdu. Zaokrąglij koszt do dwóch miejsc po przecinku

        echo "Koszt benzyny ".$_GET['price']."<br>";
        echo "Systans ".$_GET['distance']."<br>";
        echo "Spalanie ".$_GET['spalanie']."<br>";

        $result = round(($_GET['spalanie'] / 100) * $_GET['distance'] * $_GET['price'], 2);

        echo "Koszte tej terasy wynosi: ".$result." zł <br>";

    ?>

</body>
</html>