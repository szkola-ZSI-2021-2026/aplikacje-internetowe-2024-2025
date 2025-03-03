<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>FOR</h1>
    <?php
        for ($i=0; $i <= 10; $i++) { 
            echo $i." | ";
        }
        echo "<br>";
        
        for ($i=10; $i >= 0; $i--) { 
            echo $i." | ";
        }
        echo "<hr>";
    ?>

    <h1>WHILE</h1>
    <?php
        $a = 0;
        while ($a <= 10) {
            echo $a." | ";
            $a++;
        }
        echo "<br>";
        
        $a = 10;
        while ($a >= 0) {
            echo $a." | ";
            $a--;
        }
        echo "<hr>";
    ?>

    <h1>DO... WHILE</h1>
    <?php
        $a = 0;
        do {
            echo $a." | ";
            $a++;
        } while($a <= 10);
        echo "<br>";
        
        $a = 10;
        do {
            echo $a." | ";
            $a--;
        } while ($a >= 0);
        echo "<hr>";
    ?>
    
    <h1>ZADANIE 1</h1>
    <?php
        echo "wypisz liczby <10;50> zwiększając o 4";
        echo "<br><br>";

        for ($i=10; $i<=50; $i+=4) { 
            echo $i." | ";
        }
    ?>

    <hr>
    <h1>ZADANIE 2</h1>
    <?php
        echo "wypisz liczby <50;0> nieparzyste";
        echo "<br><br>";

        for ($i=50; $i>=0; $i--) { 
            if($i % 2 != 0)
                echo $i." | ";
        }
    ?>

    <hr>
    <h1>ZADANIE 3</h1>
    <?php
        echo "wypisz pętlą while liczby parzyste z zakresów <10;30> i <50;90>";
        echo "<br><br>";

        $i = 0;
        do {
            
            if($i % 2 == 0) {
                
                if ($i >= 10 && $i <= 30) {
                    echo $i." | ";
                } 

                if ($i >= 50 && $i <= 90) {
                    echo $i." | ";
                } 

            }

            $i++;

        } while ($i <= 90) 
    ?>

    <hr>
    <h1>ZADANIE 4</h1>
    <?php
        echo "wypisz pętlą while liczby podzielne przez 5 z zakresu (0;50)";
        echo "<br><br>";

        $x = 1;
        while ($x < 50) { 
            if($x % 5 == 0)
                echo $x." | ";

            $x++;
        }
    ?>
</body>
</html>