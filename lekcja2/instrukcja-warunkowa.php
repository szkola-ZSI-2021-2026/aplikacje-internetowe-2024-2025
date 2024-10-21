<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $pogoda = "dobra";

        if($pogoda == "dobra")
            echo "Pogoda jest dobra <br>";
        else
            echo "Pogoda jest zła <br>";
        echo "<br>";

        // przykłady z prezentacji
        $x = 5; 
        $y = 7;
        
        if ($x < $y) {
            echo "zmienna \$x jest mniejsza od zmiennej \$y <br>";
        }
        if ($x > $y) {
            echo "\$x jest większe od \$y <br>";
        }
        
        if ($x < $y) {
            echo "zmienna \$x jest mniejsza od zmiennej \$y <br>";
        } else {
            echo "\$x jest większe od \$y <br>";
        }

        if ($x < $y) {
            echo "zmienna \$x jest mniejsza od zmiennej \$y <br>";
        } else if ($x == $y) {
            echo "zmienne \$x i \$y są równe";
        } else {
            echo "\$x jest większe od \$y <br>";
        }
    ?>

    <hr>
    <?php
        // pierwsza gra - czy pelnoletni
        $wiek = 150;

        if($wiek < 0) {
            echo "Błąd! Wiek poniżej 0 <br>";
        } else if ($wiek > 100){
            echo "Błąd! Zbyt duży wiek <br>";
        } else if ($wiek >= 18) {
            echo "Pełnoletni <br>";
        } else {
            echo "Nie pełnoletni <br>";
        }
        echo "<br>";

        // druga gra - jakis hazard
        $los = 5;
        echo "Moj los: ".$los."<br>";

        if($los == rand(0,10) || $los == rand(0,10)) {
            echo "Wygrana!<br>";
        } else {
            echo "Przegrana!<br>";
        }
        echo "<br>";

        // sprawdz czy liczba jest parzysta
        $jakasLiczba = 15;
        if($jakasLiczba % 2 == 0) {
            echo "Liczba jest $jakasLiczba parzysta<br>";
        } else {
            echo "Liczba jest $jakasLiczba nieparzysta<br>";
        }
        echo "<br>";

        // sprawdz czy liczba jest podzielna zarówno przez 3 i 4;
        $liczba = 12;
        if($liczba % 4 == 0 && $liczba % 3 == 0) {
            echo "liczba $liczba jest podzielna przez 3 i 4";
        }
    ?>

</body>
</html>