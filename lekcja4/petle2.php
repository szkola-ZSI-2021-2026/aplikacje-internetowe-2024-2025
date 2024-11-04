<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadanie 1</h1>
    <h4>wypisz petlą for sumę kolejnych 10 liczb całkowitych zacynając od 0</h4>
    <?php
        // wypisz petlą for sumę kolejnych 10 liczb całkowitych zacynając od 0

        $x = 0;
        for ($i=0; $i < 10; $i++) { 
            $x += $i;
            echo "i: $i | x: $x <br>";
        }
    ?>
    <hr>

    <h1>Zadanie 2</h1>
    <h4>wypisz pętlą for 10 klejnych liczb parzystych zaczynając od 2</h4>
    <?php
        // wypisz pętlą for 10 klejnych liczb parzystych zaczynając od 2

        for ($i=1; $i <= 10; $i++) { 
            echo "i: ".($i*2)."<br>";
        }
    ?>
    <hr>

    <h1>Zadanie 3</h1>
    <h4>wypisz pętlą do...while sumędwóch losowych liczb z przedziału <-10;10> tak długo aż suma liczb wyniesie 0</h4>
    <?php
        // wypisz pętlą do...while sumędwóch losowych liczb z przedziału <-10;10> tak długo aż suma liczb wyniesie 0

        $a = $b = 0;
        do {
            $a = rand(-10, 10);
            $b = rand(-10, 10);
            echo "a: $a | b: $b | suma: ".($a+$b)."<br>";
        } while ($a + $b != 0);
    ?>
    <hr>

    <h1>Zadanie 4</h1>
    <h4>wypisz pętlą for sumę 10 losowych liczb z zakresu <50;100> i srediom</h4>
    <?php
        // wypisz pętlą for sumę 10 losowych liczb z zakresu <50;100> i srediom 

        $suma = 0;
        for($i=0;$i<10;$i++) {
            $rand = rand(50, 100); 
            $suma += $rand;
            echo ($i+1).". Rand: $rand | Suma: $suma <br>";
        }
        echo "Suma: $suma <br>";   
        echo "Srednia: ".($suma/10)."<br>";        
    ?>
    <hr>

</body>
</html>