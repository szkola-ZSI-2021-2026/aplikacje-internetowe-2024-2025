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
    
        echo "<p> Imie: ".$_POST['fname']."</p><br>";
        echo "<p> Wiek: ".$_POST['age']."</p><br>";
        echo "<p> Płeć: ".$_POST['gender']."</p><br>";
        echo "<p> Języki obce: ".$_POST['languages']."</p><br>";
        echo "<p> Miasto: ".$_POST['city']."</p><br>";
        echo "<p> O autorze: ".$_POST['aboutMe']."</p><br>";

    ?>
</body>
</html>