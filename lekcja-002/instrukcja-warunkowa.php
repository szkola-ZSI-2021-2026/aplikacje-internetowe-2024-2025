<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Instrukcja wyboru</h1>
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
        if($liczba % 3 == 0 && $liczba % 4 == 0) {
            echo "liczba $liczba jest podzielna przez 3 i 4 <br>";
        } else {
            echo "liczba $liczba nie jest podzielna przez 3 i 4 <br>";
        }
        echo "<br>";
    ?>

    <hr>
    <h1>Operator warunkowy</h1>
    <?php
        // operator warunkowy
        // oceń nastroj względem oceny
        $ocena = rand(1,6);
        $nastroj = ($ocena > 1) ? "zadowolony" : "nie zadowolony";
        echo "Dostales $ocena i jestes $nastroj";
    ?>

    <hr>
    <h1>Instrukcja wyboru</h1>
    <?php
        $plec = 'M';
        //switch
        echo "Płeć: ";
        switch ($plec) {
            case 'M':
                echo "mężczyzna";
                break;
            case 'K':
                echo "kobieta";
                break;
            default :
                echo "Nierozpoznany wybor";
                break;
        }
        echo "<br><br>";

        // $miesiac = "3";
        $miesiac = rand(1,12);
        echo "Miesiąc to ";
        switch ($miesiac) {
            case '1':
                echo "Styczeń <br>";
                break;
            case '2':
                echo "Luty <br>";
                break;
            case '3':
                echo "Marzec <br>";
                break;
            case '4':
                echo "Kwiecień <br>";
                break;
            case '5':
                echo "Maj <br>";
                break;
            case '6':
                echo "Czerwiec <br>";
                break;
            case '7':
                echo "Lipiec <br>";
                break;
            case '8':
                echo "Sierpień <br>";
                break;
            case '9':
                echo "Wrzesień <br>";
                break;
            case '10':
                echo "Październik <br>";
                break;
            case '11':
                echo "Listopad <br>";
                break;
            case '12':
                echo "Grudzień <br>";
                break;
            default:
                echo "Nie ma takiego miesiaca <br>";
                break;
        }
    ?>

</body>
</html>