<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciągi znaków - funkcje</title>
</head>
<body>
    <h3>Funkcje ciągów znaków</h3>
    <ul>
        <li>zmiana wielkości liter</li>
        <?php
            $tekst = "Masło ma krótkie nogi<br>";
            echo strtoupper($tekst);
            echo strtolower($tekst);
            echo ucfirst($tekst);
            echo ucwords($tekst);
        ?>
        <li>usuwanie ciągów znaków</li>
        <?php
            echo $tekst;
            echo trim($tekst,'Masło ma');
            $trimed = rtrim($tekst,"<br>");
            echo rtrim($trimed,'krótkie nogi');
        ?>
        <li>sprawdzanie długości ciągu</li>
        <?php
            $dl = strlen($tekst);
            echo "\$tekst ma długość $dl znaków<br>";
        ?>
        <li>indeksowanie znaków w ciągu</li>
        <?php
            echo $tekst[0];
            echo $tekst[26];
            echo $tekst[8];

            echo $tekst[0]="m";
            echo "<br>";
            echo $tekst;
        ?>
        <li>znajdowanie podciągów</li>
        <?php
            //strstr - znajduje podciag w tekscie i zwraca jego kontynuacje od szukanego podciagu, zwraca false jesli nie odszuka podciagu
            echo strstr($tekst,"ma ");
            if(strstr($tekst,"Ala")){
                echo "Podciąg znaleziony!<br>";
            }else{
                echo "Podciąg nieznaleziony!<br>";
            }
            //strpos - w podanym ciagu szuka podciagu i zwraca indeks od ktorego pociag sie zaczyna, w przeciwnym razie zwroci false
            echo strpos($tekst,"nogi");
            if(strpos($tekst,"Ala")){
                echo "Znaleziono szukany podciąg.<br>";
            }else{
                echo "Nieodnaleziono szukanego podciągu.<br>";
            }
            //substr - wycina czesc ciagu poprzez podanie indeksu i opcjoalnie ilosci znakow w przeciwnym razie wycina do konca
                echo substr($tekst,0,10),"<br>";
                echo substr($tekst,12),"<br>";
                echo substr($tekst,20,3),"<br>";
            //strcmp - 
            $tmp = "masło ma krótkie nogi<br>";
            $strcmp = strcmp($tekst,$tmp);
            if($strcmp==0){
                echo "Ciągi takie same<br>";
            }else if($strcmp>0){
                echo "Pierwszy ciąg jest większy<br>";
            }else{
                echo "Drugi ciąg jest większy<br>";
            }
        ?>
    </ul>
    <hr>
    <?php
        //sprawdz czy tekst zawiera mniej niz 50 znakow jesli tak jest za krotki jeesli przekroczy 100 znakow jest za dlugi w przeciwnym razie jest optymalny
        $text = "maslo maslo maslo maslo maslo maslo maslo msalo maslo maslo maslo<br>";
        $dlugosc = strlen($text);
        if($dlugosc<50){
            echo "tekst jest za krótki<br>";
        }else if($dlugosc>100){
            echo "tekst jest za długi<br>";
        }else{
            echo "tekst optymalny<br>";
        }

        //spawdz czy podany tekst zawiera twoje imie
        $text2 = "Masło masło opszt masło Bartosz masło opszt.<br>";
        if(strstr($text2,"Bartosz")){
            echo "Podciąg znaleziony!<br>";
        }else{
            echo "Podciąg nieznaleziony!<br>";
        }
    ?>
</body>
</html>