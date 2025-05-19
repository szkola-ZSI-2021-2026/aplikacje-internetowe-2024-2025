<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obsługa plików</title>
    <style>
        code {
            font-weight: bold;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Pliki</h1>
    <p><code>file_exists(nazwa-pliku)</code> sprawdza czy plik istnieje i zwraca true/false</p>
    <?php
        if (file_exists("plik.txt")) {
            echo "Plik istnieje";
        }else{
            echo "Nie onaleziono pliku";
        }
    ?>
    <p><code>is_file(nazwa-pliku)</code> sprawdza czy argument jest plikiem, zwraca true/false</p>
    <?php
        if (is_file("dolaczanie-plikow.php")) {
            echo "Jest to plik";
        }else{
            echo "To nie jest plik";
        }
    ?>
    <p><code>filesize(nazwa-pliku)</code> zwraca rozmiar pliku w bajtach</p>
    <?php
        echo "Rozmiar pliku: ",filesize("dolaczanie-plikow.php")," B";
    ?>
    <h3>Tworzenie i usuwanie plików</h3>
    <p><code>touch(nazwa-pliku)</code> tworzy pusty plik, zwraca true/false, jesli plik juz istnieje zmienia date modyfikacji</p>
    <?php
        if (touch("nowy-plik.txt")) {
            echo "Nowy plik został utworzony";
        }else{
            echo "Nie udało się utworzyć pliku";
        }
    ?>
    <p><code>unlink(nazwa-pliku)</code> usuwa istniejacy plik, zwraca true/false</p>
    <?php
        if (unlink("nowy-plik.txt")) {
            echo "Plik został usunięty";
        }else{
            echo "Nie udało się usunąć pliku";
        }
    ?>
    <h3>Otwieranie i zamykanie pliku</h3>
    <p><code>fopen(nazwa-pliku,tryb)</code> otwiera podany plik w podanym trybie, zwraca wskaźnik (deskryptor) pliku lub false w przypadku niepowodzenia</p>
    <p>Tryby:</p>
    <ul>
        <li>r - otwiera plik do odczytu, ale plik musi istnieć</li>
        <li>w - otwiera do zapisu, jeśli plik nie istnieje to go utworzy</li>
        <li>a - otwiera do dopisywania na końcu, jeśli plik nie isnieje utworzy go</li>
    </ul>
    <p><code>fclose(deskryptor)</code> zamyka plik, zwraca true/false</p>
    <?php
        //r
        $d1 = fopen("plik.txt","r");
        echo "Wskaźnik pliku: $d1 <br>";
            if (fclose($d1)) {
                echo "Udało się zamknąć plik";
            }else{
                echo "Nie udało się zamknąć pliku";
            }
        echo "<br>";
        $d2 = fopen("plik2.txt","w");
        $d3 = fopen("plik3.txt","a");
        fclose($d3);
    ?>
    <h3>Zapis do pliku</h3>
    <p><code>fwrite(deskryptor,ciąg-znaków)</code> zapisuje dane do pliku, zwraca liczbę zapisanych bajtów</p>
    <?php
        if(fwrite($d2,"Ala ma kota")){
            echo "Zapis do pliku udany";
        }else{
            echo "Nie udało zapisać się danych do pliku";
        }
        fclose($d2);
    ?>
    <p><code>file_put_contents(nazwa-pliku, ciąg-znaków)</code> zapisuje dane do pliku, bez potrzeby otwierania i zamykania, zwraca liczbę zapisanych bajtów lub false</p>
    <?php
        // plik domyslnie otwierany w trybie w
        echo file_put_contents("plikPut.txt","nowe dane");
        // z flagą FILE_APPEND działą w trybie dopisywania - a
        file_put_contents("plikPut.txt","nowa linia\n",FILE_APPEND);
    ?>
    <h3>Odczyt z pliku</h3>
    <p><code>fgets(deskryptor, długość)</code> odczytuje pojedyncze linie, zwraca odczytany ciąg znaków, długość jest opcjonalna, wymaga funkcji <code>feof()</code></p>
    <p><code>feof(deskryptor)</code> sprawdza czy osiągnięto koniec pliku i zwraca true/false</p>
    <?php
        //zapis do pliku 3
        $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque maiores fugit quisquam itaque minus aperiam enim ea harum, voluptatibus, natus corrupti! Earum vitae, odio cum nam aperiam magnam est doloremque.";
        $d3 = fopen("plik3.txt","w");
        fwrite($d3,$lorem);
        fclose($d3);
        $d3 = fopen("plik3.txt","r");
        // echo fgets($d3);
        while(!feof($d3)){
            echo fgets($d3,18);
            echo "<br>";
        }
        fclose($d3);
    ?>
    <p><code>fgetc(deskryptor)</code> odczytuje po jednym znaku przesuwając wskaźnik na następny znak, gdy osiągnie koniec pliku zwraca false</p>
    <?php
        $d2 = fopen("plik2.txt","r");
        while(($znak=fgetc($d2))!= false){
            echo $znak;
            echo "<br>";
        }
    ?>
    <p><code>fread(deskryptor,rozmiar)</code> odczytuje określoną ilość bajtów w bloki i zwraca odczytany ciąg znaków, rozmiar jest wymagany, funcja <code>feof()</code> jest wymagana</p>
    <?php
        $d = fopen("plik.txt","r");
        while(!feof($d)){
            echo fread($d,32);
            echo "<br>";
        }
        fclose($d);
    ?>
    <p><code>file_get_contents(nazwa-pliku)</code> zwraca odczytany tekst lub false, połączenie funkcji otwarcia odczytu i zamknięcia</p>
    <?php
        echo file_get_contents("plikPut.txt");
    ?>
    <p><code>file(nazwa-pliku)</code> odczytuje plik do tablicy, polaczenie funkcji otwarcia, odczytu i zamkniecia</p>
    <?php
        $tablica = file("plik2.txt");
        foreach($tablica as $dane){
            echo $dane;
        }
    ?>
    <hr>
</body>
</html>