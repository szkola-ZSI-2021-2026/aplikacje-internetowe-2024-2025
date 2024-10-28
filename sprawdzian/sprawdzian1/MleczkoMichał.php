<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Zadanie 1</h3>
    <?php
        $wiek = 18;
        $imie = "Michał";
        echo "Nazywam sie ".$imie." i mam ".$wiek." lat. <br>";
    ?>

    <h3>Zadanie 2</h3>
    <?php
        $waga = 100;
        $wzrost = 2;

        $BMI = $waga / pow($wzrost, 2);

        echo "Twoje BMI wynosi ".$BMI."<br>";
    ?>

    <h3>Zadanie 3</h3>  
    <?php
        $zmienna1 = 3.314;
        $zmienna2 = 45.12;

        echo "Zmienna1: ".$zmienna1."<br>";
        echo "Zmienna2: ".$zmienna2."<br>";

        $zmienna1 = floor($zmienna1);
        $zmienna2 = floor($zmienna2);
        echo "Zaokrąglenie w dół zmiennej1: ".$zmienna1."<br>";
        echo "Zaokrąglenie w dół zmiennej2: ".$zmienna2."<br>";

        $iloraz = $zmienna1 * $zmienna2;
        echo "Iloraz zmiennych: ".$iloraz."<br>";

        $reszta = $zmienna1 % $zmienna2;
        echo "Reszta z dzielenia zmiennych: ".$reszta."<br>";

        $pierwiastek = sqrt($zmienna2);
        echo "Pierwiastek kwadratowy drugiej zmiennej: ".$pierwiastek."<br>";
    ?>

</body>
</html>