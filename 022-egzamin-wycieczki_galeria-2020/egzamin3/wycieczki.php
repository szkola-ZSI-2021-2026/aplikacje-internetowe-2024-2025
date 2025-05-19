<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>
            BIURO PODRÓŻY
        </h1>
    </header>
    
    <main>
        <div class="left">
            <h2>
                KONTAKT
            </h2>
            
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>

            <p>
                telefon: 555666777
            </p>
        </div>

        <div class="center">
            <h2>
                GALERIA
            </h2>
            
            <?php
            
                $connection = mysqli_connect("localhost", "root", "", "egzamin3_2");

                $query1 = "SELECT zdjecia.nazwaPliku, zdjecia.podpis FROM zdjecia ORDER BY zdjecia.podpis ASC;";
            
                $result1 = mysqli_query($connection, $query1);
            
                while ($row = mysqli_fetch_row($result1)) {
                    echo "<img src='$row[0]' alt='$row[1]''>";
                    // echo $row[0]."<br>";
                }
            ?>

        </div>
        <div class="right">
            <h2>
                PROMOCJE
            </h2>

            <table>
                <tr>
                    <td>Jesień</td>
                    <td>Grupa 4+</td>
                    <td>Grupa 10+</td>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </div>
    </main>

    <section>
        <h2>LISTA WYCIECZEK</h2>
        
        <?php
            $query2 = "SELECT wycieczki.id, wycieczki.dataWyjazdu, wycieczki.cel, wycieczki.cena FROM wycieczki WHERE wycieczki.dostepna = '1';";

            $result2 = mysqli_query($connection, $query2);

            while($row = mysqli_fetch_row($result2)) {
                echo "$row[0]. $row[1], $row[2], cena: $row[3] <br>";
            }

            mysqli_close($connection);
        ?>

    </section>

    <footer>
        <p>
            Stronę wykonał: PESEL
        </p>
    </footer>
</body>
</html>