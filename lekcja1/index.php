<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.html</title>
</head>
<body>
    
    <h1>Wstęp</h1>
    
    <?php
        printf("Hello word1! <br>");
        echo "Hello word2! <br>";
        echo "Hello word3! <br>";

        $zmienna="Hello word4! <br>";
        echo $zmienna;
        $zmienna="Hello word5!";
        printf($zmienna." konkatenacja <br> <br>");

        echo "Pierwszy <br>";
        echo "Drugi <br>";
        echo "Trzeci <br>"; 
        echo "Pierwszy ", "Drugi ", "Trzeci ";
        echo "Pierwszy ", "Drugi ", "Trzeci"; 
        //! shift + alt +  dol-strzalka -> kopiuje linijke w dol
        //! alt + z -> zawijanie lini
    ?>

    <br> <br>
    <h2>Zmienne</h2>
    <?php
        //* deklarowanie zmiennych
        $liczbaInt = 10;
        $liczbaFloat = 3.14;
        $tekst = "ABC";
        $prawda = true; // true = 1; false = 0
        $znak = '$';

        //* wywoływanie zmiennych
        echo "Integer: $liczbaInt <br>";
        echo "Float: $liczbaFloat <br>";
        printf("String: $tekst <br>");
        echo "Boolean: ".$prawda."<br>";
        echo $znak."znak dolara";
    ?>

    <br> <br>
    <h2>Apostrofy</h2>
    <?php 
        echo "$tekst<br>";
        echo '$tekst<br>'; // ignorowanie zmiennej w apostrofach
        echo 'Wartość zmiennej $tekst: '.$tekst.'<br>'; 
        echo "Wartość zmiennej \$tekst: ".$tekst."<br>"; // \ do ignorowania znaku $ w cudzysłowiu
    ?>

    <br> <br>
    <h2>Rzutowanie</h2>
    <?php 
        var_dump($liczbaFloat); // podanie typu i wartości podanej zmiennej

        $jednorazowe = (integer) $liczbaFloat; // rzutowanie jednorazowe nie zmienia wartości liczby rzutoawniej
        echo "<br> Zmienna \$liczbaFloat rzutowana na int: ".$jednorazowe."<br>";
        var_dump($jednorazowe);
        echo "<br>";
        var_dump($liczbaFloat);

        echo "<br>";
        $x = settype($liczbaInt, "string"); // rzutoawnie trwałe zmienia wartość liczby rzutowaniej
        var_dump($x);
        echo "<br>";
        var_dump($liczbaInt);
    ?>

    <br> <br>   
    <h2>Stałe</h2>
    <?php 
        define("PI", 3.14); // deklarowanie stałych
        echo "Stała: ".PI."<br>"; // odwoływanie się do stałych
        // przykład stałych predefiniowanych
        echo "Wersja PHP: ".PHP_VERSION."<br>"; 
        // przykład stałych magicznych
        echo "Scierzka do pliku: ".__FILE__."<br>"; 
        echo "Numer lini:".__LINE__."<br>";
    ?>

</body>
</html>