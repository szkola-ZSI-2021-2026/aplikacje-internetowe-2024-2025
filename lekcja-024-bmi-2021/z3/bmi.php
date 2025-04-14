<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="wzor.png" alt="wzor BMI">
        </div>
        <div id="baner">
            <h1>
                Oblicz swoje BMI
            </h1>
        </div>
    </header>

    <main>
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartoiść maksymalna</th>
            </tr>
            <!-- SKRYPT 1 -->
            <?php
                $connection = mysqli_connect("localhost", "root", "", "egzamin2_mm");

                $query1 = "select bmi.informacja, bmi.wart_min, bmi.wart_max from bmi;";

                $result1 = mysqli_query($connection, $query1);
                
                while($row = mysqli_fetch_row($result1)) {
                    echo "<tr>";
                    echo "<td> $row[0] </td>";
                    echo "<td> $row[1] </td>";
                    echo "<td> $row[2] </td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>

    <section id="left">
        <h2>
            Podaj wagę i wzrost
        </h2>

        <form action="bmi.php" method="post">
            Waga: <input type="number" name="weight" min="1"> <br>
            Wzrost w cm: <input type="number" name="height" min="1"> <br>
            <input type="submit" value="Oblicz i zapamiętaj wynik">
        </form>

        <!-- SKRYPT 2 -->
        <?php
            if(!empty($_POST['weight']) && !empty($_POST['height'])) {
                    
                $waga = $_POST['weight'];
                $wzrost = $_POST['height'];

                $bmi = ( $waga / ($wzrost * $wzrost) ) * 10000;
                echo "Twoja waga: $waga ";
                echo "Twój wzrost: $wzrost";
                echo "<br> BMI wynosi: $bmi <br>";

                $przedzial;
                if($bmi>=0 && $bmi<=18) { $przedzial = 1; }
                if($bmi>=19 && $bmi<=25) { $przedzial = 2; }
                if($bmi>=26 && $bmi<=30) { $przedzial = 3; }
                if($bmi>=31 && $bmi<=100) { $przedzial = 4; }

                // echo $przedzial;
                $time = time();
                // echo $time."<br>";
                $date = date("Y-m-d", $time);
                // echo $date."<br>";

                $query2 = "insert into wynik VALUES(null,$przedzial,'$date',$bmi);";

                mysqli_query($connection, $query2);
            }
            
            mysqli_close($connection);
        ?>
    </section>

    <section id="right">
        <img src="rys1.png" alt="ćwiczenia">
    </section>

    <footer>
        Autor: PESEL
        <a href="kwerendy.txt">Zobacz kwerendy</a>
    </footer>
</body>
</html>