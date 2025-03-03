<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operatory.php</title>
</head>
<body>
    <h1>Operatory</h1>
    <ul>
        <li><h2>arytmetyczne</h2></li>
            <?php 
                /**
                 * + dodawanie
                 * - odejmowanie
                 * "*" mnożenie
                 * / dzielenie
                 * % reszta z dzielenia modulo
                 * ** potęgowanie
                 */

                $a = 12;
                $b = 4;

                echo "a = ".$a."<br>";
                echo "b = ".$b."<br>";

                echo "Dodawanie: a + b = ".$a + $b."<br>";
                echo "Odejmowanie: a - b = ".$a - $b."<br>";
                echo "Mnożenie: a * b = ".$a * $b."<br>";
                echo "Dzielenie: a : b = ".$a / $b."<br>";
                echo "Modulo: a % b = ".$a % $b."<br>";
                echo "Potęgowanie: a ^ b = ".$a ** $b."<br>";

                $wynik = $a * $b - 2 * $a / $b; // zachowana kolejność działań 
                // 12 * 4 - 2 * 12 / 4
                // 48 - 6
                // 42
                echo $wynik;
            ?>
        
        <li><h2>porównania</h2></li>
            <?php 
                /**
                 * * true gdy:
                 * == są równe
                 * "!=" nie są równe
                 * === są równe i tego samego typu
                 * "!==" są różne i tego samego typu
                 * > większe
                 * < mniejsze
                 * >= większe bądź równe
                 * <= mniejsze bądź równe
                 * <> argumenty są różne
                 */

                // sprawdzanie wartości
                echo "Równe?: ",var_dump($a==$b),"<br>";
                echo "Różne?: ",var_dump($a!=$b),"<br>";
                echo "Większe? :",var_dump($a>$b),"<br>";
                echo "Większe lub równe? :",var_dump($a>=$b),"<br>";
                echo "Mniejsze? :",var_dump($a<$b),"<br>";
                echo "Mniejsze lub równe? :",var_dump($a<=$b),"<br>";
            
                // sprawdzanie typów
                echo "Równe i zgodne typy?: ",var_dump($a===$b),"<br>";
                echo "Różne lub nie zgodne typy?: ",var_dump($a!==$b),"<br>";
            ?>

        <li><h2>logiczne</h2></li>
            <?php 
                /**
                 * and && - jeden i drugi jest prawdą
                 * or || - jeden albo drugi jest prawdą
                 * not ! - neguje wartości
                 * xor - kiedy tylko jeden warune jest prawdą. dwa dadzą false
                 */

                $prawda = true;
                $false = false;


                echo "Iloczyn logiczna?: ",var_dump($prawda && $false),"<br>";
                echo "Suma logiczna?: ",var_dump($false || $false),"<br>";
                echo "Negacja: ",var_dump(!$prawda),"<br>";
            ?>

        <li><h2>przypisania</h2></li>
            <?php
                //! operatory skrócone
                $liczba = $a;
                $liczba += $a;
                $liczba *= $a;
                $liczba /= $a;
                $liczba %= $a;

                echo "\$liczba po skróconych operacjach: ".$liczba."<br>";

                // inkrementacja
                $liczba++; // postinkrementacja +1
                ++$liczba; // preinkrementacja +1
                echo $liczba;
                echo "<br>";
                
                // dekrementacja
                $liczba--; // post...
                echo --$liczba; // pre...
                echo "<br>";
            ?>

        <li><h2>funkcje matematyczne</h2></li>
            <?php
                echo "Wartość bezwzględna ".abs(-7.5)."<br>";
                echo "Potęgowanie ".pow(2,5)."<br>";
                echo "Pierwiastek ".sqrt(81)."<br>";
                echo "Zaokrąglanie ".round(3.5)."<br>";
                echo "Zaokrąglanie w góre ".ceil(3.2)."<br>";
                echo "Zaokrąglanie w dół".floor(3.9)."<br>";
                echo "Losownie ".rand(1,10)."<br>";
                echo "Wartość minimalna ".min(1,6,$a,$b)."<br>";
                echo "Wartość maksymalna ".max(1,6,$a,$b)."<br>";

                $wynik = round(3.5) + rand(1,10);
                echo $wynik;
            ?>
    </ul>
</body>
</html>