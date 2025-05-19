<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <!-- skrypt 2 -->
    <?php
        $connection = mysqli_connect("localhost", "root", "", "dane3");
        if(!empty($_POST['nazwa']) && !empty($_POST['cena'])) {
            $name = $_POST['nazwa'];
            $price = $_POST['cena'];
            
            $query2 = "INSERT INTO produkty VALUES(null, 1, 4, '$name', 10, null, $price, 'owoce.jpg');";

            mysqli_query($connection, $query2);
        }
        
        // mysqli_close($connection);
    ?>

    <header>
        <div class="left">
            <h1>
                Internetowy sklep z eko-warzywami
            </h1>
        </div>

        <div class="right">
            <ol>
                <li>warzywwa</li>
                <li>owoce</li>
                <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
            </ol>
        </div>
    </header>

    <main>
        <!-- skrypt 1 -->
        <?php
            // $connection = mysqli_connect("localhost", "root", "", "dane3");

            $query1 = "SELECT produkty.nazwa, produkty.ilosc, produkty.opis, produkty.cena, produkty.zdjecie from produkty WHERE produkty.Rodzaje_id IN (1,2);";

            $result1 = mysqli_query($connection, $query1);

            function printBlock($img, $nazwa, $opis, $ilosc, $cena) {
                echo "<div class='produkt'>";
                echo "<img src='$img' alt='warzywniak'>";
                echo "<h5> $nazwa </h5>";
                echo "<p> opis: $opis </p>";
                echo "<p> na stanie: $ilosc </p>";
                echo "<h2> $cena zł </h2>";
                echo "</div>";
            }

            while ($row = mysqli_fetch_row($result1)) {
                printBlock($row[4],$row[0],$row[2],$row[1],$row[3]);
            }
            mysqli_close($connection);
        ?>
    </main>

    <footer>
        <form action="sklep.php" method="post">
            Nazwa: <input type="text" name="nazwa">
            Cena: <input type="text" name="cena">
            <input type="submit" value="Dodaj produkt">
        </form>

        Stronę wykonał: PESEL
    </footer>
</body>
</html>