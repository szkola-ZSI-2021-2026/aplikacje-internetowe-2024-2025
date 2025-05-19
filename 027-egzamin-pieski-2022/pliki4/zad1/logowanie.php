<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>
            Forum wilbicieli psów
        </h1>
    </header>

    <aside>
        <img src="obraz.jpg" alt="foksterier">
    </aside>

    <main>
        <div class="top">
            <h2>
                Zapisz się
            </h2>
            <form action="logowanie.php" method="post">
                login: <input type="text" name="login"> <br>

                hasło: <input type="password"
                name="password"> <br>

                powtórz hasło: <input type="password" name="ppassword"> <br>

                <input type="submit" value="Zapisz">
            </form>
            <!-- EFEKT DZIŁANIA SKRYPTU -->
            <?php
                $connection = mysqli_connect("localhost", "root", "", "psy"); 

                $login = $_POST['login'];
                $password = $_POST['password'];
                $repeatedPassword = $_POST['ppassword'];

                if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['ppassword'])) {
                    echo "<p style='color:red'> Wypałnij wszystkie pola </p>";
                    // $login = $_POST['login'];
                    // $password = $_POST['password'];
                    // $repeatedPassword = $_POST['ppassword'];
                } else {
                    $isUserExist = 0;
                    $query1='SELECT login FROM uzytkownicy;';
                    $result1 = mysqli_query($connection, $query1);
                    while($row = mysqli_fetch_row($result1)){
                        if($row[0] == $login) {
                            echo "<p style='color:red'> login występuje w bazie danych, konto nie został dodane </p>";
                            $isUserExist = 1;
                        }
                    }
                    if($isUserExist == 0) {
                        if($password != $repeatedPassword) {
                            echo "<p style='color:red'> hasła nie są takie same, konto nie został dodane </p>";
                        }else {
                            $enxryptedPassword = sha1($password);
                            $query2 = "INSERT INTO uzytkownicy VALUES(null, 'Grzegorz', '$enxryptedPassword');";
                            mysqli_query($connection, $query2);
                            echo "<span style='color:green;'>Konto zostało dodane <span>";
                        }
                    }
                }

                mysqli_close($connection);
            ?>
        </div>
        
        <div class="bottom">
            <h2>
                Zapraszamy wszystkich
            </h2>

            <ol>
                <li>właścicieli psów</li>
                <li>weterynarzy</li>
                <li>tych, co chcą kupić psa</li>
                <li>tych, co lubią psy</li>
            </ol>

            <a href="regulamin.html">Przeczytaj regulamin forum</a>
        </div>
    </main>

    <footer>
        Stronę wykonał: PESEL
    </footer>
</body>
</html>