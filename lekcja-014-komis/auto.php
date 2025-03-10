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

            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php
            // skrypt 2

            ?>
        </ul>
    </section> 
    <section id="right">
        <h2>Pełne dane: Fiat</h2>
        <?php
        // skrypt 3
        
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