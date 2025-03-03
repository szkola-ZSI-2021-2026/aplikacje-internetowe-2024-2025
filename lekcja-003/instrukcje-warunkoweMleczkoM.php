<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadanie 1</h1>
    <?php
        $z = 50;
        $y = 40;
        
        if ($z != 0) {    
            $x = $y / $z;
            echo "wynik dzielenia $y / $z wynosi: $x <br>"; 
        } else {
            echo "Nie można dzielić przez 0 <br>";
        }
    ?>

    <hr>
    <h1>Zadanie 2</h1>
    <?php
        if($z > 0 && $y > 0){
            if($z % $y == 0 && $y % $z == 0) {
                echo "Liczby $z i $y są dodatnie i podzielene przez siebie <br>";
            } else {
                echo "Liczby $z i $y są dodatnie ale nie są podzielene przez siebie <br>";
            }
        }
    ?>

    <hr>
    <h1>Zadanie 3</h1>
    <?php 
        if($y > $z) {
            if($y > $x) {
                if($x > $z) {
                    echo "$z $x $y";
                } else {
                    echo "$x $z $y";
                }
            } else {
                if ($y > $z) {
                    echo "$z $y $x";
                } else {
                    echo "$y $z $x";
                }
            }
        } else {
            if ($z > $x) {
                if ($x > $y) {
                    echo "$y $x $z";
                } else {
                    echo "$x $y $z";
                }
            } else {
                if ($y > $x) {
                    echo "$z $y $x";
                } else {
                    echo "$z $x $y";
                }
            }   
        }
    
    ?>


</body>
</html>