<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formPHP.css">
</head>
<body>
    <h1>Dane osobowe</h1>

    <?php
        echo "<table>";

        echo "<tr> <th colspan='2'> Dane pacjenta </th> </tr>";
        
        echo "<tr>";
        echo "<th>Imie:</th>";
        if(!empty($_POST["fname"])) {
            echo "<td>".$_POST["fname"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Nazwisko:</th>";
        if(!empty($_POST["lname"])) {
            echo "<td>".$_POST["lname"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>PESEL:</th>";
        if(!empty($_POST["pesel"])) {
            echo "<td>".$_POST["pesel"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Email:</th>";
        if(!empty($_POST["email"])) {
            echo "<td>".$_POST["email"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Phone:</th>";
        if(!empty($_POST["phone"])) {
            echo "<td>".$_POST["phone"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Ul:</th>";
        if(!empty($_POST["ul"])) {
            echo "<td>".$_POST["ul"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Numer domu:</th>";
        if(!empty($_POST["nrDom"])) {
            echo "<td>".$_POST["nrDom"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Numer mieszkania:</th>";
        if(!empty($_POST["nrM"])) {
            echo "<td>".$_POST["nrM"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Kod pocztowy:</th>";
        if(!empty($_POST["code"])) {
            echo "<td>".$_POST["code"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Miasto:</th>";
        if(!empty($_POST["city"])) {
            echo "<td>".$_POST["city"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Data urodzenia:</th>";
        if(!empty($_POST["Dur"])) {
            echo "<td>".$_POST["Dur"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Lekarz:</th>";
        if(!empty($_POST["doctor"])) {
            echo "<td>".$_POST["doctor"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Data wizyty:</th>";
        if(!empty($_POST["Dwiz"])) {
            echo "<td>".$_POST["Dwiz"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Godzina wizyty:</th>";
        if(!empty($_POST["Gwiz"])) {
            echo "<td>".$_POST["Gwiz"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "<tr>";
        echo "<th>Dodatkowe uwagi:</th>";
        if(!empty($_POST["uwagi"])) {
            echo "<td>".$_POST["uwagi"]."</td>";
        }else {
            echo "<td class='null'> N/A </td>";
        }
        echo "</tr>";

        echo "</table>";
    ?>

    <h1>Dane osobowe v2</h1>
    <?php
        $names = array('fname', 'lname', 'pesel', 'email', 'phone', 'ul', 'nrDom', 'nrM', 'code', 'city', 'Dur', 'doctor', 'Dwiz', 'Gwiz', 'uwagi');

        $dataTypes = array('Imie', 'Nazwisko', 'PESEL', 'E-mail', 'Phone', 'Ul', 'Numer domu', 'Numer mieszkania', 'Kod pocztowy', 'Miasto', 'Data urodzenia', 'Lekarz', 'Data wizyty', 'Godzina wizyty', 'Dodatkowe uwagi');
    
        echo "<table>";
        echo "<tr> <th colspan='2'> Dane pacjenta </th> </tr>";
        for($i = 0; $i < sizeof($_POST); $i++){
            echo "<tr>";

            echo "<th>".$dataTypes[$i]."</th>";

            if(!empty($_POST[$names[$i]])) {
                echo "<td>".$_POST[$names[$i]]."</td>";
            } else {
                echo "<td class='null'> N/A </td>";
            }

            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>