<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <header>
        <h1>Samochody</h1>
    </header>
    <section id="left">
        <h2>Wykaz samochodów</h2>
        <ul>
            <?php
                // skrypt 1
                $idConnection = mysqli_connect(
                    "localhost", "root", "", "komis"
                );
                $q1 = "SELECT id, marka, model from samochody;";
                $res1 = mysqli_query($idConnection, $q1);
                // print_r($res1);
                while($row=mysqli_fetch_row($res1)){
                    echo "<li> $row[0] $row[1] $row[2] </li>";
                }
                print_r($row);
            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php
                // skrypt 2
                $q2 = "SELECT zamowienia.Samochody_id, zamowienia.Klient FROM zamowienia;";
                $res2 = mysqli_query($idConnection, $q2);
                while($row=mysqli_fetch_row($res2)){
                    echo "<li> $row[0] $row[1] </li>";
                }
            ?>
        </ul>
    </section> 
    <section id="right">
        <h2>Pełne dane: Fiat</h2>
        <?php
            // skrypt 3
            $q3 = "SELECT * from samochody where samochody.marka='fiat';";
            $res3 = mysqli_query($idConnection, $q3);
            while($row=mysqli_fetch_row($res3)){
                echo "$row[0] / $row[1] / $row[2] / $row[3] / $row[4] / $row[5] /<br>"; 
            }

            // $arr=mysqli_fetch_array($res3)
            // print_r($arr);

            mysqli_close($idConnection);
        ?>
    </section>
    <footer>
    <table>
        <tr>
            <td>
                <a href="kwerendy.txt">kwerendy</a>
            </td>
            <td>
                Autor: PESEL
            </td>
            <td>
                <img src="auto.png" alt="komis samochodowy">
            </td>
        </tr>
    </table>

    </footer>
  
    <?php
    // mysqli_connect('nazwahosta','user','haslo','baza') -> idPołączenia
    // mysqli_query(idPołączenia, zapytanie) -> wynikZapytania
    // mysqli_close(id_połączenia)
    ?>
</body>
</html>