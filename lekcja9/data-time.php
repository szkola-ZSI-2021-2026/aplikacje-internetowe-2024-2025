<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data - time</title>
</head>
<body>
    <?php
        // time() - zwraca ilośc sekund od znacznika czasu 00:00 01.01.1970r.
        echo "Liczba sekund: ".time()."<br>";
        $date = getdate();
        
        echo "Weekday: ".$date["weekday"]."<br>";
        print_r(getdate());

        echo "<br>";
        echo "<br>";
        foreach ($date as $key => $value) {
            echo "$key: $value <br>";
        }
        echo "<br>";

    ?>
</body>
</html>