<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h3>stworz funkcje, ktora zwroci najwieksz liczbe z posrod 3</h3>
    <?php
        $liczba1 = 2123;
        $liczba2 = 4421;
        $liczba3 = 3214;
        function maxOfThree($l1, $l2, $l3) {
            return max($l1, $l2, $l3);
        }
        echo "Największa liczba z trzech: $liczba1, $liczba2, $liczba3 to ".maxOfThree($liczba1,$liczba2,$liczba3);
    ?>

    <hr>
    <h3>stworz funkcje która skalsyfikuje użytkownika pod względem wzrostu &lt150cm niski, 150 - 180 sredni, &gt180 wysoki</h3>
    <?php
        $wzrost = 175;
        function klasyfikacja($wzrost) {
            if($wzrost < 150) { return "niski"; }
            elseif ($wzrost <= 180) { return "sredni"; }
            else { return "wysoki"; }
        }
        echo "Klasyfikacja dla wzrostu $wzrost to ".klasyfikacja(175);
    ?>

    <hr>
    <h3>Stworz funkcje obliczającą BMI</h3>
    <?php
        $waga = 75;
        $wzrost = 185;
        function bmi($waga, $wzrost) {
            return round($waga / pow(($wzrost/100),2), 2);
        }
        echo "BMI dla osoby z wagą: $waga kg i wzrostem: $wzrost cm to: ".bmi($waga, $wzrost);
    ?>
    <hr>
    <h3>stworz funkcje, która dla podanego przedziału sprawdzi, które liczby są parzyste i wypisze je na ekran</h3>
    <?php
        function sprawdz($min=0, $max=100) {
            $arr = array();
            $i = 0;
            while ($min <= $max) {
                if($min % 2 == 0) {
                    $arr[$i] = $min;
                    $i++; 
                }
                $min++;
            }

            return $arr;
        }

        print_r(sprawdz(0,200));   
    ?>
    <hr>
</body>
</html>