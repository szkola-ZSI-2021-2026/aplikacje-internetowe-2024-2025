<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h2>
            Miejska Biblioteka Publiczna w Książkowicach
        </h2>
    </header>

    <main>
        <div class="left">
            <h2>
                Dodaj czytelnika
            </h2>

            <form action="biblioteka.php" method="post">
                Imię: 
                <input type="text" name="imie"> <br>
                Nazwisko: 
                <input type="text" name="nazwisko"> <br>
                Rok urodzenia: 
                <input type="number" name="rok-urodzenia"> <br>
                <input type="submit" value="DODAJ"><br>
            </form>

            <?php
                $conn = mysqli_connect("localhost","root","","biblioteka2");

                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $rok_urodzenia = $_POST['rok-urodzenia'];
                $kod = strtolower($imie[0].$imie[1]).$rok_urodzenia[2].$rok_urodzenia[3].strtolower($nazwisko[0].$nazwisko[1]);
                echo $kod."<br>";

                $query = "INSERT INTO czytelnicy VALUES(NULL,'$imie','$nazwisko','$kod');";

                echo "Czytelnik $nazwisko został dodany do bazy dancyh <br>";

                mysqli_query($conn,$query);
            ?>
        </div>
        
        <div class="center">
            <img src="biblioteka.png" alt="biblioteka">
            <h4>
                ul. Czytelnicza <br>
                25 12-120 Książkowice <br>
                tel.: 123123123 <br>
                e-mail: <a href="mailto:biuro@bib.pl">biuro@bib.pl</a> <br>
            </h4>
        </div>

        <div class="right">
            <h3>
                Nasi czytelnicy:
            </h3>
            
            <ul>
                <?php
                    $query = "SELECT czytelnicy.imie, czytelnicy.nazwisko FROM czytelnicy;";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_row($result)){
                        echo "<li> $row[0] $row[1] </li>";
                    }
                    mysqli_close($conn);
                ?>
            </ul>
        </div>
    </main>

    <footer>
        <p>
            Projekt witryny: PESEL
        </p>
    </footer>

</body>
</html>