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
                <input type="submit" value="ZAPISZ">
            </form>

            <!-- uaktualnienie bazy danych -->
            <?php
                $connection = mysqli_connect("localhost", "root", "", "egzamin6_2");

                if(!empty($_POST['wpis'])) {
                    $wpis = $_POST['wpis'];

                    $query1 = "UPDATE zadania SET zadania.wpis = '$wpis' WHERE zadania.dataZadania = '2020-08-27';";

                    mysqli_query($connection, $query1);
                }
            ?>
        </div>
        <div class="right">
            <img src="logo2.png" alt="Mój organizer">
        </div>
    </header>

    <main>
        <!-- skrypt 1 -->
        <?php
            $query2 = "SELECT zadania.dataZadania, zadania.miesiac, zadania.wpis FROM zadania WHERE zadania.miesiac = 'Sierpien';";
        
            function printBlock($date, $miesiac, $wpis) {
                echo "<section class='oneDay'>";
                echo "<h6>$date, $miesiac</h6>";
                echo "<p>$wpis</p>";
                echo "</section>";
            }

            $result1 = mysqli_query($connection, $query2);

            while($row = mysqli_fetch_row($result1)) {
                printBlock($row[0], $row[1], $row[2]);
            }
        ?>
    </main>

    <footer>
       <!-- skrypt 2 -->
        <?php
            $query3 = "SELECT zadania.miesiac, zadania.rok FROM zadania WHERE zadania.dataZadania = '2020-08-01';";

            $result2 = mysqli_query($connection, $query3);

            while ($row = mysqli_fetch_row($result2)) {
                echo "<h1>";
                echo "miesiąc: $row[0], rok: $row[1]";
                echo "</h1>";
            }

            mysqli_close($connection);
        ?>

        <p>
            Stronę wykonał PESEL
        </p>
    </footer>
</body>
</html>