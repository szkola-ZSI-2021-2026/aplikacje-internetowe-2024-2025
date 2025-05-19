<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciól</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>
            Portal Społecznościowy - moje konto
        </h1>
    </header>

    <main>
        <h2>
            Moje zainteresowania
        </h2>
        
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>

        <h2>
            Moi znajomi
        </h2>

        <!-- SKRYPT 1 -->
        <?php
            $connection = mysqli_connect("localhost","root","","dane3");
        
            $query1 = "SELECT osoby.imie, osoby.nazwisko, osoby.opis, osoby.zdjecie FROM osoby WHERE osoby.Hobby_id IN(1,2,6);";

            $result1 = mysqli_query($connection, $query1);
        
            function printBlock($zdjecie, $imie, $nazwisko, $opis) {
               // echo "<div class='blok'>";
                echo "<div class='zdjecie'>";
                echo "<img src='$zdjecie' alt='przyjaciel'>";
                echo "</div>";

                echo "<div class='opis'>";
                echo "<h3> $imie $nazwisko </h3>";
                echo "<p> Ostatni wpis: $opis </p>";
                echo "</div>";

                echo "<div class='linia'>";
                echo "<hr>";
                echo "</div>";
                //echo "</div>";
            }

            while($row = mysqli_fetch_row($result1)) {
                printBlock($row[3], $row[0], $row[1], $row[2]);
            }

        ?>

        <!-- SKRYPT 2 -->
        <?php

            mysqli_close($connection);
        ?>
    </main>

    <footer>
        <div class="left">
            Stronę wykonał: PESEL
        </div>

        <div class="right">
            <a href="mailto:ja@portal.pl">napisz do mnie</a>
        </div>
    </footer>
</body>
</html>