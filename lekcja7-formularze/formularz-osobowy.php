<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane formulzrz osobowego</title>
</head>
<body>
    <h1>Dane formularza osobowego</h1>
    
    <?php
        if(!empty($_POST['fname']) && !empty($_POST['age'])) {
            echo "<p> Imie: ".$_POST['fname']."</p>";

            if($_POST['age'] >= 18) {
                echo "<p> Wiek: ".$_POST['age']."</p>";
            } else {
                echo "<h3 style='color:red;'>Jestes zbyt młody na złożenie formularza, jesteś nie pełnoletni.</h3>";
            }
        } else {
            echo "<h3 style='color:red;'>Nie podano imienia lub wieku</h3>";
        }

        if(isset($_POST['gender'])) {
            echo "<p> Płeć: ".$_POST['gender']."</p>";
        } else {
            echo "<h3 style='color:red;'> Nie podano płci</h3>";
        }


        if(!empty($_POST['languages'])) {
            // echo "<p> Języki obce: ".$_POST['languages']."</p>";
            // foreach ($_POST['languages'] as $language) {
            //     echo "<li>".$language."</li>";
            // }
            echo "<p> Znasz poniższe języki obce: </p>";
            printArrayAsUnorganisedList($_POST['languages']);
        } else {
            echo "<h3 style='color:red;'> Nie podano języków obcych</h3>";
        }

        if(!empty($_POST['city'])) {
            echo "<p> Miasto: ".$_POST['city']."</p>";
        } else {
            echo "<h3 style='color:red;'> Nie podano miasta</h3>";
        }
        
        if(!empty($_POST['aboutMe'])) {
            echo "<p> O autorze: ".$_POST['aboutMe']."</p>";
        } else {
            echo "<h3> Nie podano dodatkowych informacji</h3>";
        }

        function printArrayAsUnorganisedList($arr) {
            echo "<ul>";
            foreach ($arr as $language) {
                echo "<li>".$language."</li>";
            }
            echo "</ul>";    
        }
    ?>

    <hr>

    <?php
        echo "<p>Zawartość tabeli POST</p>";
        var_dump($_POST);
        echo "<br><br>";
        print_r($_POST);
    ?>
</body>
</html>