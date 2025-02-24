<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Masło</h1>
    <?php
        // time() - zwraca ilosc sekund od znaczka czasu i stycznia 1970r. 00:00
        echo "Liczba sekund: ".time()."s <br>";
        // getdate() - zwraca tablice asocjacyjna z informacjami o dacie i czasie
        $data = getdate();
        print_r($data);
        $dzien = $data["mday"];
        $miesiac = $data["mon"];
        $rok = $data["year"];
        if ($dzien < 10){
            $dzien = "0".$dzien;
        }
        if ($miesiac < 10) {
            $miesiac = "0".$miesiac;
        }
        echo "<br>";
        echo "Dzisiejsza data: $dzien.$miesiac.$rok";
        echo "<br>";
        echo "Aktualna godzina ",$data["hours"],":",$data["minutes"],":",$data["seconds"],"<br>";
        // date() - formatuje date i godzine dzieki znacznikom 
        echo date("d.m.Y");
        echo "<br>";
        echo date("H:i.s");
        echo "<br>";
        echo date("js M Y");
        echo "<br>";
        echo date("D F y");
        echo "<br>";
        echo date("g a");
        echo "<br>";
        // mkdate() - ustawia wybrana date i godzine zwracajac liczbe sekund
        $szkola = mktime(9,0,0,9,2,2024);
        print_r(getdate($szkola));
        echo "<br>";
        echo "Rozpoczęcie roku szkolnego odbyło się ",date("d.m.Y H:i:s",$szkola);
        echo "<br>";
        // strtotime() - przeksztalca angielskie zwroty na sekundy
        echo "Now: ",strtotime("now"),"<br>";
        echo "+1 day: ",strtotime("+1 day"),"<br>";
        echo "+5 days: ",strtotime("+5 days"),"<br>";
        echo "+1 week: ",strtotime("+1 week"),"<br>";
        echo "6.01.2025: ",date("d.m.Y",strtotime("6 January 2025")),"<br>";
        echo "next Wednesday: ",strtotime("next Wednesday"),"<br>";
        echo "last Monday: ",strtotime("last Monday"),"<br>";
        echo "zeszły poniedziałek time() ",date("js F l",time()-60*60*24*7),"<br>";
    ?>
    <h3>Ćwiczenia</h3>
    <?php
        $urodziny = mktime(18,30,0,6,1,2006);
        // print_r(getdate($urodziny));
        $dzienUro = getdate($urodziny);
        echo "getdate() Urodziłem się w ",$dzienUro["weekday"],"<br>";
        echo "date() Urodziłem się w ",date("l",$urodziny),"<br>";
        // sprawdź ile czasu zostało do walentynek
        $walentynki = "2025-02-14";
        $dzienWalentynek = date("l",strtotime($walentynki));
        echo "Walentynki są w $dzienWalentynek <br>";
        $polskiedni = [
            "Monday" => "poniedzaiłek",
            "Tuesday" => "wtorek",
            "Wedenesday" => "środa",
            "Thursday" => "czwartek",
            "Friday" => "piątek",
            "Saturday" => "sobota",
            "Sunday" => "niedziela",
        ];
        echo "Walentynki są w $polskiedni[$dzienWalentynek]<br>";
        $ileczasu = (strtotime($walentynki) - strtotime("now"))/(60*60*24);
        echo "Walentynki są za ",ceil($ileczasu)," dni.<br>";
        //wyswietl baner zalezny od pory dnia
        function banner(){
            $godzina = date("G");
            if ($godzina>22 && $godzina<6){
                return 'noc.jpg';
            }else if($godzina<8){
                return 'wschod.jpg';
            }else if($godzina<20){
                return 'dzien.jpg';
            }else{
                return 'zachod.jpg';
            }
        }
        $obraz = banner();
        echo "<img src='$obraz' height='200'><br>";

        //podaj ile dni zostalo do konca roku kalendarzowego oraz ile uplynelo od jego rozpoczecia
        $dzisiaj = time();
        $poczatekroku = mktime(0,0,0,1,1,2025);
        $koniecroku = mktime(0,0,0,12,31,2025);
        echo "Dni do końca roku: ",ceil(($koniecroku-$dzisiaj)/(3600*24)),"<br>";
        echo "Dni od rozpoczęcia roku: ",ceil(($dzisiaj-$poczatekroku)/(3600*24)),"<br>";

        //korzystajac z funkcji getdate() wypisz dzisiejsza date w jezyku polskim tak aby miesiac zapisany byl slownie
        $today = getdate();
        print_r($today);
        $polskiemiesiace = [
            "January" => "stycznia",
            "February" => "lutego",
            "March" => "marca",
            "April" => "kwietnia",
            "May" => "maja",
            "June" => "czerwca",
            "July" => "lipca",
            "August" => "sierpnia",
            "September" => "września",
            "October" => "października",
            "November" => "listopada",
            "December" => "grudnia",
        ];
        echo "Dzisiaj jest ".$today["mday"]." ".$polskiemiesiace[$today["month"]]." ".$today["year"]." rok.<br>";

        //przy uzyciu pola formularza daty i czasu wyswietl kolejno ile lacznie zostalo sekund minut godzin dni miesiecy lat do wybranego wydarzenia
    ?>
        <form action="" method="post">
            <label for="data">Data wydarzenia</label>
            <input type="datetime-local" name="wydarzenie" id="data">
            <input type="submit" value="oblicz">
        </form>
        <?php
            if(!isset($_POST["wydarzenie"])){
                echo "<b>Nie ustawiono daty i godziny!</b><br>";
            } else {
                $wybranadata = $_POST["wydarzenie"];
            echo "Wybrana data: ",date("d.m.Y H:i:s",strtotime($wybranadata)),"<br>";
            function obliczCzas($wybranadata){
                $dzis = time();
                $czasdowybranejdaty = strtotime($wybranadata);
                $sekundy = $czasdowybranejdaty-$dzis;
                $minuty = round($sekundy/60);
                $godziny = round($minuty/60);
                $dni = round($godziny/24);
                $miesiace = round($dni/30,2); //umownie na 30
                $lata = round($miesiace/12,2);
                $czas = "sekundy: $sekundy<br>
                minuty: $minuty<br>
                godziny: $godziny<br>
                dni: $dni<br>
                miesiace: $miesiace<br>
                lata: $lata<br>";
                return $czas;
            }
            echo "Czas do wydarzenia: ",obliczCzas($wybranadata),"<br>";
            }
            
           
        ?>
</body>
</html>