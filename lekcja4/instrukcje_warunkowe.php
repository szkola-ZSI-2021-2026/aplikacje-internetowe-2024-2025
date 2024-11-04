<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadanie 1</h1>
    <h4>sprawdź która z trzech liczb jest największa</h4>
    <?php
        // sprawdź która z trzech liczb jest największa
        $a = 34;
        $b = 57;
        $c = 28;

        echo max(4,7,8)."<br>";

        if($a>$b && $a>$c) echo $a;
        else if($b>$c && $b>$a) echo $b;
        else $c;
    ?>
    <hr>
    
    <h1>Zadanie 2</h1>
    <h4>sprawdź czy liczba jest trzy cyfrowa, jeśli jest sprawdź czy jest podzilna przez 3</h4>
    <?php
        // sprawdź czy liczba jest trzy cyfrowa, jeśli jest sprawdź czy jest podzilna przez 3

        $liczba = rand(0, 2000);
        if($liczba > 99 && $liczba < 1000) {
            echo "$liczba jest 3 cyfrowa <br>";
            if ($liczba % 3 == 0) {
                echo "liczba jest podzielna przez 3 <br>";
            } else {
                echo "liczba nie jest podzielna przez 3 <br>";
            }
        }else {
            echo "$liczba nie jest 3 cyfrowa <br>";
        }
    ?>
    <hr>
</body>
</html>