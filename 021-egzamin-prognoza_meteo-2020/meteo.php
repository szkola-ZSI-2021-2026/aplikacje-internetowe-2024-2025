<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    
    <header>
        <div class="left">
            <p>
                mak, 2019r.
            </p>
        </div>

        <div class="center">
            <h2>
                Prognoza pogody Poznań
            </h2>
        </div>

        <div class="right">
            <img src="logo.png" alt="prognoza">
        </div>
    </header>

    <section>
        <div id="query">
            <a href="kwerendy.txt">
                Kwerendy
            </a>
        </div>

        <div id="map">
            <img src="obraz.jpg" alt="Polska, Poznań">
        </div>
    </section>

    <main>
        <table>
            <tr>
                <th>LP.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <!-- skrypt 1 -->
            <?php
                $conn = mysqli_connect("localhost","root","","prognoza");
                $query = "SELECT * FROM pogoda WHERE pogoda.miasta_id=2 ORDER BY pogoda.data_prognozy DESC;";

                $result = mysqli_query($conn,$query);
            
                while($row = mysqli_fetch_row($result)) {
                    echo "<tr>";

                    echo "<td> $row[0] </td>";
                    echo "<td> $row[2] </td>";
                    echo "<td> $row[3] </td>";
                    echo "<td> $row[4] </td>";
                    echo "<td> $row[5] </td>";
                    echo "<td> $row[6] </td>";

                    echo "</tr>";
                }

                mysqli_close($conn);
            ?>
        </table>
    </main>

    <footer>
        <p>
            Stronę wykonał: PESEL
        </p>
    </footer>
</body>
</html>