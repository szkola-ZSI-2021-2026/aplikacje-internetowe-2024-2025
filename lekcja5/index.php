<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h3>Tablice</h3>
    <?php
        $zmienna = 1;
        echo $zmienna;
        var_dump($zmienna);
        print_r($zmienna);

        echo "<br>";
        $arrI = array(1,2,3,4,5,6);
        $arrI[6] = 7;
        $arrI[] = 8;
        $arrI[] = 9;
        $arrI[] = 10;
        $arrI[] = 11;
        $arrI[0] = 100;
        for ($i=0; $i < sizeof($arrI); $i++) { 
            echo $arrI[$i]." | ";
        }
        echo "<br>";
        var_dump($arrI);
        echo "<br>";
        echo "<br>";

        $arrI2[0] = 10;
        $arrI2[1] = 11;
        $arrI2[2] = 12;
        $arrI2[4] = 14;
        $arrI2[3] = 13;
        print_r($arrI2);
    ?>

    <hr>
    <h3>Tablice asocjacyjne</h3>
    <?php
        // klucz => wartość
        $tabA = array("kontynent"=>"Europa", "panstwo"=>"Holandia", "miasto"=>"Amsterdam");
        var_dump($tabA);
        echo "<br><br>";
        $tabA["ulica"] = "Holenderska"; // dodanie
        $tabA["miasto"] = "Eindhoven"; // zastąpienie
        var_dump($tabA);

        echo "<br><br>";
        $tabA2["nazwisko"] = "Kowalski";
        $tabA2["imie"] = "Jan";
        $tabA2["wiek"] = "20";
        print_r($tabA2);

        echo "<br><br>";
    ?>

    <hr>
    <h3>Tablice wielowymiarowe</h3>
    <?php
        // tablica 3 x 3

        $tabMultiI = array(
            array(0,1,2),
            array(3,4,5),
            array(6,7,8)
        );

        echo "tabMulti[1][0] = ".$tabMultiI[1][0]."<br>";
        echo "tabMulti[2][1] = ".$tabMultiI[2][1]."<br>";
        echo "tabMulti[0][2] = ".$tabMultiI[0][2]."<br>";

        print_r($tabMultiI);

        $tabMultiI[3] = array(9,10,11);
        echo "<br><br>";
        print_r($tabMultiI);

        echo "<br><br>";
        for ($i=0; $i < sizeof($tabMultiI); $i++) { 
            for ($j=0; $j < sizeof($tabMultiI[$i]); $j++) { 
                echo $tabMultiI[$i][$j]." | ";
            }
            echo "<br>";
        }

        $tabMultiAso = array(
            "konfiguracja1" => array(
                "kontynent" => "Europa",
                "panstwo" => "Włochy",
                "miasto" => "Mediolan"
            ),
            "konfiguracja2" => array(
                "kontynent" => "Azja",
                "panstwo" => "Chiny",
                "miasto" => "Pekin"
            ),
            "konfiguracja3" => array(
                "kontynent" => "Afryka",
                "panstwo" => "Egipt",
                "miasto" => "Kair"
            )
        );

        echo "<br>";
        print_r($tabMultiAso);
        echo "<br>";
        print_r($tabMultiAso["konfiguracja2"]["panstwo"]);
        echo "<br><br>";
    ?>

    <hr>
    <h3>FOREACH</h3>
    <?php
        foreach ($arrI as $value) {
            echo $value." ";
        }

        echo "<br><br>";
        foreach ($tabA as $key => $value) {
            echo "$key => $value <br>";
        }

        echo "<br>";
        foreach ($tabMultiAso as $key => $value) {
            // echo "$key => $value <br>";
            foreach ($value as $key2 => $value2) {
                echo "$key: $key2 => $value2 <br>";
            }
        }
    ?>

    <hr>
    <h3>Funkcje</h3>
    <?php
        // sortowanie 
        //     sort     // rosnąco według wartości
        sort($arrI);
        echo "SORT: <br>";
        print_r($arrI);
        echo "<br><br>";
        //     rsort    // malejąco według wartości
        rsort($arrI);
        echo "RSORT: <br>";
        print_r($arrI);
        echo "<br><br>";
        //     asort    // rosnąco według wartości pozostawiając klucze niezmienione
        asort($arrI);
        echo "ASORT: <br>";
        print_r($arrI);
        echo "<br><br>";
        //     arsort   // malejąco według wartości pozostawiając klucze niezmienione
        arsort($arrI);
        echo "ARSORT: <br>";
        print_r($arrI);
        echo "<br><br>";
        //     ksort    // rosnąco według kluczy pozostawiając wartości kluczy niezmienione
        ksort($arrI);
        echo "KSORT: <br>";
        print_r($arrI);
        echo "<br><br>";
        //     krsort   // malejąco według kluczy pozostawiając wartości kluczy niezmienione
        krsort($arrI);
        echo "KRSORT: <br>";
        print_r($arrI);
        echo "<br><br>";

        // is_array     // sprawdza czy zmienna jest tablicą
        if(is_array($tabMultiAso)) {
            echo "Zmienna jest tablicą <br>";
        } else {
            echo "Zmienna nie jest tablicą <br>";
        }
        // in_array     // aprawdza czy wartość jest w tablicy
        if(in_array("Basia", $tabA2)) {
            echo "Wartość znajduje się w tablicy <br>";
        } else {
            echo "Wartośc nie znajduje się w tablicy <br>";
        }
        echo in_array("Basia", $tabA2) ? "Jest <br>" : "Nie ma <br>";

        // count,sizeof        // ilosc elementów w tablicy
        echo "Ilość elementów w tablicy: ".count($arrI)."<br>";
        echo "Rozmiar elementów w tablicy: ".sizeof($arrI)."<br>";
        
        for ($i=0; $i < count($arrI); $i++) { 
            echo $arrI[$i]." | ";
        }

        // MAX i MIN
        echo "MAX: ".max($tab1)."<br>";
        echo "MIN: ".min($tab1)."<br>";
    ?>

    <hr>
    <h3>Ćwiczenia</h3>
    <hr>
    <h3>Zad 1</h3>
    <h4>utwórz tab1 zawierającą następujące liczby: 7,3,1,6,9,5,4,10,2,2. Wypisz zawartość 5 komorki tablicy na ekran. Zmien zawartosc 7 komurki tablicu wprowadzajac do niej 12. Utworz tab2. Skopiuj tab1 do tab2.</h4>
    <?php
        $tab1 = array(7,3,1,6,9,5,4,10,2,2);
        echo $tab1[4]."<br>";
        $tab1[6] = 12;
        echo "tab1: <br>";
        print_r($tab1);
        echo "<br><br>";

        $tab2 = array();
        for ($i=0; $i < sizeof($tab1); $i++) { 
            $tab2[$i] = $tab1[$i];
        }
        echo "tab2: <br>";
        print_r($tab2);
    ?>

    <hr>
</body>
</html>      