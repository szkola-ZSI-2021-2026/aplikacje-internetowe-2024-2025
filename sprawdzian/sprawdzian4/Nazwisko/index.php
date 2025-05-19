<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>
            W naszej hurtowni kupisz najtaniej
        </h1>
    </header>

    <main>
        <div class="left">
            <h3>
                Ceny wybranych artykułów w hurtowni:
            </h3>
            <!-- SKRYPT 1 -->
            <table>
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "sklep");
                
                    $query1 = "SELECT towary.nazwa, towary.cena FROM towary LIMIT 4;";

                    $result1 = mysqli_query($connection, $query1);

                    while($row = mysqli_fetch_row($result1)) {
                        echo "<tr>";
                        echo "<td> $row[0] </td>";
                        echo "<td> $row[1] zł</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>

        <div class="center">
            <h3>
                Ile będąkosztować Twoje zakupy?
            </h3>
            <form action="index.php" method="post">
                Wybierz artykuł
                <select name="artykul" id="artykul">
                    <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                    <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                    <option value="Cyrkiel">Cyrkiel</option>
                    <option value="Linijka 30 cm">Linijka 30 cm</option>
                    <option value="Ekierka">Ekierka</option>
                    <option value="Linijka 50 cm">Linijka 50 cm</option>
                </select> <br>

                liczba sztuk:
                <input type="number" name="liczba" id="liczba" value="1"><br>
                <input type="submit" value="OBLICZ">
            </form>

            <!-- SKRYPT 2 -->
            <?php
                $produkt = $_POST['artykul'];
                
                $ilosc = $_POST['liczba'];
                
                $query2 = "SELECT towary.cena FROM towary WHERE towary.nazwa = '$produkt';";

                $result2 = mysqli_query($connection, $query2);

                $towary_cena = mysqli_fetch_row($result2);

                $kwota_zakupow = $towary_cena[0] * $ilosc;

                echo round($kwota_zakupow, 1);

                mysqli_close($connection);
            ?>
        </div>

        <div class="right">
            <img src="zakupy2.png" alt="hurtownia">
            <h3>Kontakt</h3>
            <p>
                telefon: <br>
                111222333 <br>
                email: <br>
                <a href="mailto:hurt@wp.pl">hurt@wp.pl</a>
            </p>
        </div>
    </main>

    <footer>
        <h4>
            Stronę wykonał Mleczko
        </h4>
    </footer>
</body>
</html>