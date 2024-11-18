<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    <h3>Tablice asocjacyjne</h3>
    <?php
    
    
    ?>
</body>
</html>