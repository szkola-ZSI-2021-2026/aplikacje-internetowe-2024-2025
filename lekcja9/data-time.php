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
    
    
        // strtotime() - przekształca anngielskie zwroty na czas (sekundy)
        echo "<br>";
        echo "<hr>";
        echo "Now ".strtotime("now")."<br>";
        echo "+1 day ".strtotime("+1 day")."<br>";
        echo "+5 days ".strtotime("+5 days")."<br>";
        echo "+1 week ".strtotime("+1 week")."<br>";
        echo "+8 hours ".strtotime("+8 hours")."<br>";
        echo "6 stycznia 2025 ".strtotime("6 January 2025")." | ".date("d.m.Y H:i:s", strtotime("6 January 2025"))."<br>";
        echo "Nastepna środa ".strtotime("next Wednesday")."<br>";
        echo "Seszły poniedziałek ".date("jS F l",strtotime("last Monday"))."<br>";
        echo "Zeszły poniedziałek time() ".date("jS F l",time()-(60*60*24*7)),"<br>";
    ?>

    <hr>
    <h1>Ćwiczenia</h1>
    <h3>Zad 1</h3>
    <?php
        $dzienUrodzenia = mktime(0,0,1,9,24,2006);
        echo date("jS F l",$dzienUrodzenia)."<br>";
        print_r(getdate($dzienUrodzenia));
        echo "<br>";
        echo "Urodziłem się ", getdate($dzienUrodzenia)["weekday"];
    ?>
    <h3>Zad 2</h3>
    <h4>sprawdz ile czasu zostało do walentynek</h4>
    <?php
        $walentynki = "2025-02-14";
        $dzienWalentynek = date("l",strtotime($walentynki));
        $polskieDni = [
            "Monday" => "Poniedziałek",
            "Tuesday" => "Wtorek", 
            "Wednesday" => "Sroda", 
            "Thursday" => "Czwartek", 
            "Friday" => "Piątek", 
            "Saturday" => "Sobota", 
            "Sunday" => "Niedziela" 
        ];
        echo "Walentynki są w ".$polskieDni[$dzienWalentynek]."<br>";
        $ileCzsuWSek = (strtotime($walentynki) - strtotime("now"))/(60*60*24);
        echo "<b style='color:red'>Walentynki</b> są za ",ceil($ileCzsuWSek)," dni.<br>";
    ?>

    <h3>Zad 3</h3>
    <h4>Wyświetl baner zależny od pory dnia</h4>
    <?php

        function banner() {
            $godzina = date("G");
            $godzina = 12;
            
            if($godzina>22 || $godzina<6){
                return 'noc.jpg';
            } elseif ($godzina < 8) {
                return 'wschod.jpg';
            } elseif ($godzina < 19) {
                return 'dzien.jpg';
            } else {
                return 'zachod.jpg';
            }
        }

        echo "<img src=img/".banner()." height=400px width=800px>";
    ?>
</body>
</html>