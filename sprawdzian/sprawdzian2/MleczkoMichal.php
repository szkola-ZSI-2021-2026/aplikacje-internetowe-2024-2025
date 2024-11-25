<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25.11.2024</title>
</head>
<body>

    <h3>Zadanie 1</h3>
    <?php
        $zmienna1 = 12;
        $zmienna2 = 22;

        if (($zmienna1 % 2 == 0) && ($zmienna2 % 2 == 0)) {
            if ($zmienna2 - 4 != 0) {
                echo (($zmienna1 + $zmienna2) / ($zmienna2 - 4));
            } else {
                echo "Dzielnik nie może się równać 0";
            }
        } else {
            echo "zmienna $zmienna1 nie jest parzysta lub zmienna $zmienna2 nie jest parzysta";
        }
    ?>

    <hr>
    <h3>Zadanie 2</h3>
    <?php
        $dzienTygodznia = 3;
        switch ($dzienTygodznia % 7) {
            case 1:
                echo "Dzien roboczy - poniedzialek";
                break;
            case 2:
                echo "Dzien roboczy - wtorek";
                break;
            case 3:
                echo "Dzien roboczy - środa";
                break;
            case 4:
                echo "Dzien roboczy - czwartek";
                break;
            case 5:
                echo "Dzien roboczy - piątek";
                break;
            case 6:
                echo "Weekend - sobota";
                break;
            case 0:
                echo "Weekend - niedziela";
                break;
        }
    ?>

    <hr>
    <h3>Zadanie 3</h3>
    <?php
        $sum = 0;
        $r = 0;
        for ($i=0; $i < 10; $i++) { 
            $r = rand(50,100);
            $sum += $r;
            echo ($i+1).". Wylosowana liczba ".$r."<br>";
        }
        echo "suma = ".$sum;
    ?>

    <hr>
    <h3>Zadanie 4</h3>
    <?php
        $x = 50;
        while ($x >= 10) {
            if ($x % 3 == 0) {
                if($x % 2 == 0) {
                    $x--;
                    continue;
                }

                echo "Liczba podzielna przez 3 i nie parzysta z przedzialu <50;10> to ".$x."<br>";
            }
            $x--;
        }        
    ?>
    <hr>
</body>
</html>