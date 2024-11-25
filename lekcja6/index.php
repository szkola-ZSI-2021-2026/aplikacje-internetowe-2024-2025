<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // explode ($separator, $string) - zamienia ciąg znaków na tablice
        $string = "To zdanie skłąda się z 7 słów";
        $tabString = explode(" ", $string);
        foreach ($tabString as $index => $value) {
            echo "[$index] $value <br>";
        }

        // implode($separator,$tablica) - zamienia tablicę na ciąg znaków
        echo $string = implode(" ", $tabString);
    
        // array_shift ($arrayshift) - usuwa pierwszy element z tablicy
        

        // array_unshift
    ?>
</body>
</html>