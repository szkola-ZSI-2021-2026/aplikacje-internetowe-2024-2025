<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <h1>Funkcje</h1>
    <?php
        // funkcja bez argumentu, czyli nic nie zwraca
        function wiatj () {
            // instrukcje
            echo "Hello word! <br>";
        }
        wiatj(); // wywolanie


        // funkcja z argumentem domyślnym - nic nie zwraca
        function witajImie($imie="Tomek"){
            echo "Witaj <b>$imie</b> <br>";
        }
        witajImie();
        witajImie("Kasia");

        //funkcja z argumentami i wzwaracajca wrtość
        function losuj($min=0, $max=100){
            return rand($min, $max);
        }
        echo losuj()."<br>";
        echo losuj(100, 200)."<br>";
        echo losuj(1000, 2000)."<br>";
        echo losuj(10000, 20000)."<br>";
        echo losuj(100000, 200000)."<br>";


        echo "<hr>";
        $znak = '+'; // + - * /
        $liczba1 = 10;  
        $liczba2 = 5;
        function suma($a, $b) { return $a+$b; }
        function różnica($a, $b) { return $a-$b; }
        function iloczyn($a, $b) { return $a*$b; }
        function iloraz($a, $b) { return $a/$b; }

        switch ($znak) {
            case '+':
                echo "Suma liczb $liczba1 i $liczba2 to ".suma($liczba1, $liczba2)." <br>";
                break;
            case '-':
                echo "Różnica liczb $liczba1 i $liczba2 to ".różnica($liczba1, $liczba2)." <br>";
                break;
            case '*':
                echo "Iloczyn liczb $liczba1 i $liczba2 to ".iloczyn($liczba1, $liczba2)." <br>";
                break;
            case '/':
                echo "Iloraz liczb $liczba1 i $liczba2 to ".iloraz($liczba1, $liczba2)." <br>";
                break;       
        }

        function wyswietlLiczby() {
            global $liczba1, $liczba2;
            echo "Zadeklarowane liczby to: $liczba1 i $liczba2 <br>";
            echo "Zadeklarowane liczby to: ".$GLOBALS['liczba1']." i ".$GLOBALS['liczba2']."<br>";
        }
        wyswietlLiczby();

        // & - referencja do orginalnej zmiennej
        function modyfikacjaLiczby(&$liczba1) {
            $liczba1 *= $liczba1;
        }
        modyfikacjaLiczby($liczba1);
        echo $liczba1."<br>";



        // static - zapamiętuje stan zmiennej globalnej po wywołaniu funkcji
        function inkrementacja(){
            static $i = 1;
            echo $i."<br>";
            $i++;
        } 
        inkrementacja();
        inkrementacja();
        inkrementacja();
        inkrementacja();
        inkrementacja();
        inkrementacja();
        inkrementacja();
    ?>

</body>
</html>