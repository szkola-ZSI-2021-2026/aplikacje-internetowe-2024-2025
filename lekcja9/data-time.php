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
        // getdate() - zwraca tablicę asocjacyjną z informacjami o dacie i czasie
        $date = getdate();
        
        echo "Weekday: ".$date["weekday"]."<br>";
        print_r(getdate());

        echo "<br>";
        echo "<br>";
        foreach ($date as $key => $value) {
            echo "$key: $value <br>";
        }
        echo "<br>";

        $dzien = $date["mday"];
        $miesiac = $date["mon"];
        $rok = $date["year"];

        if($dzien < 10) {
            $dzien = "0".$dzien;
        }
        if($miesiac < 10) {
            $miesiac = "0".$miesiac;
        }

        echo "Dzisiejsza data: $dzien.$miesiac.$rok <br>";
        echo "Aktualna godina ".$date["hours"].":".$date["minutes"].":".$date["seconds"]."<br>";


        // date() - formatuje datę i godzinę dzięki znacznikom zwracając string
        echo "<br>";
        echo "<hr>";
        echo date("d.m.Y");
        echo "<br>";
        echo date("H.i.s");
        echo "<br>";
        echo date("jS M Y");
        echo "<br>";
        echo date("D F y");
        echo "<br>";
        echo date("g a");
    
    
        // mktime() - ustawia wybraną datę i godzinę zwracając liczbe sekund
        echo "<br>";
        echo "<hr>";
        $rozpoczecieRokuSzkolnego = mktime(9,0,0,9,2,2024);
        echo $rozpoczecieRokuSzkolnego."<br>";
        print_r(getdate($rozpoczecieRokuSzkolnego));
        echo "<br>";
        echo "Rozpoczęcie roku szkolnego odbyło się ".date("d.m.Y H:i:s", $rozpoczecieRokuSzkolnego)."<br>";
    
    
        // strtotime() - przekształca anngielskie zwroty na czas
        echo "<br>";
        echo "<hr>";
        echo strtotime("now")."<br>";
    
    ?>
</body>
</html>