<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header id="miniatura">
        <a href="pliki5/borowik-miniatura.jpg">
            <img src="pliki5/borowik-miniatura.jpg" alt="grzybobranie">
        </a>
    </header>

    <header id="tytul">
        <h1>
            Idziemy na grzyby!
        </h1>
    </header>

    <main>
        <?php
            // skrypt 1
            $idConn = mysqli_connect("localhost","root","","dane2");
            $query = "select grzyby.nazwa_pliku,grzyby.potoczna from grzyby;";
            $res = mysqli_query($idConn, $query);
            while($row = mysqli_fetch_assoc($res)) {
                echo "<img src='pliki5/".$row['nazwa_pliku']."' title='".$row['potoczna']."'> </img>";
            }
        ?>
    </main>

    <aside>
        <h2>
            Grzyby jadalne
        </h2>
        <?php
            // skrypt 2
            $query = "select nazwa,potoczna from grzyby where jadalny=1;";
        ?>

        <h2>
            Polecamy do sosów
        </h2>
        <?php
            // skrypt 3
            $query = "select grzyby.nazwa,grzyby.potoczna,rodzina.nazwa from grzyby inner join rodzina on grzyby.rodzina_id=rodzina.id where grzyby.potrawy_id=1;";

            mysqli_close($idConn);
        ?>
    </aside>

    <footer>
        <p>
            Autor: PESEL
        </p>
    </footer>
</body>
</html>