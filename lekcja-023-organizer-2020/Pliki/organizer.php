<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div class="left">
            <h2>
                MÓJ ORGANIZER
            </h2>
        </div>
        <div class="center">
            <form action="organizer.php" method="post">
                Wpis wydarzenia: 
                <input type="text" name="wpis">
                <input type="submit" value="ZAPISZZ">
            </form>

            // uaktualnienie bazy danych
            <?php
                $connection = mysqli_connect("localhost", "root", "", "egzamin6_2");

                $wpis = $_POST['wpis'];

                $query1 = "UPDATE zadania SET zadania.wpis = '$wpis' WHERE zadania.dataZadania = '2020-08-27';";

                mysqli_query($connection, $query1);
            ?>
        </div>
        <div class="right">
            <img src="logo2.png" alt="Mój organizer">
        </div>
    </header>

    <main>
        // skrypt 1
        <?php
            $query2 = "SELECT zadania.dataZadania, zadania.miesiac, zadania.wpis FROM zadania WHERE zadania.miesiac = 'Sierpien';";
        
            function printBlock($date, $wpis) {
                echo "<section>";
                echo "<h6> </h6>";
                echo "<p> </p>";
                echo "</section>";
            }
        ?>
    </main>

    <footer>
        // skrypt 2
        <p>
            Stronę wykonał PESEL
        </p>
    </footer>
</body>
</html>