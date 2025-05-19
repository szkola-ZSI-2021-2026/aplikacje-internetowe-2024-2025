<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>

    <main>
        <div id="left">
            <h2>Ryby drapieżne wśród naszych wód</h2>

            <ul>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "wedkowanie2");

                    $query = "SELECT nazwa, wystepowanie from ryby where styl_zycia = 1;";

                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_row($result)) {
                        echo "<li> $row[0], występowanie: $row[1] </li>";
                    }

                    mysqli_close($conn);
                ?>
            </ul>
        </div>

        <div id="right">
            <img src="pliki1/ryba1.jpg" alt="Sum"> <br>

            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </main>
    
    <footer>
        <p>Stronę wykonał: PESEL</p>
    </footer>
</body>
</html>