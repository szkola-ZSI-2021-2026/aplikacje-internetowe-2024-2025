<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MichałMleczko4A</title>
</head>
<body>
    <h1>Zad 1</h1>
    <form action="michalM.php" method="post">

        <label for="name">Imie: </label>
        <input type="text" id="name" name="name"> <br>
        <label for="l_name">Nazwisko: </label>
        <input type="text" id="l_name" name="l_name"> <br>
        <label for="age">Wiek: </label>
        <input type="number" id="age" name="age"> <br>
        <label for="dateOfBirth">Data urodzenia: </label>
        <input type="date" id="dateOfBirth" name="dateOfBirth"> <br>
        <input type="submit" value="SUBMIT"><br> <br>
    </form>
    <hr>

    <?php
        if(empty($_POST["name"]) || empty($_POST["l_name"])  || empty($_POST["age"])  || empty($_POST["dateOfBirth"] )) {
            echo "Wprowadź wszystkie dane! <br>";
        } else {
            // D
            echo $_POST["name"]."<br>";
            echo $_POST["l_name"]."<br>";

            // E
            if($_POST["age"] > 0  && $_POST["age"] <= 99) {
                echo "Wiek ".$_POST["age"]." lat <br>";
            }

            // F
            $currTime = time();
            // echo $currTime."<br>";
            $dateOfBirth = strtotime($_POST["dateOfBirth"]);
            // echo $dateOfBirth."<br>";
            echo "Data urodzenia: ".date("d.m.Y", $dateOfBirth)."<br>";

            $dateToNextBirth = $currTime - $dateOfBirth;
            $min = $dateToNextBirth/60;
            $hrs = $min / 60;
            $days = $hrs/24;
            // echo $days."<br>";
            // echo floor($days);
            // echo $dateToNextBirth."<br>";
            echo "Do następnych urodzin: ".floor($days)." dni <br>";

        }
    ?>

    <hr>
    <hr>

    <h1>Zad 2</h1>
    <form action="michalM.php" method="post">
        Wybierz rozmiar pizzy: <br>
        <label for="small">Mała</label>
        <input type="radio" value="small" name="size" id="small"> <br>
        <label for="medium">Srednia</label>
        <input type="radio" value="medium" name="size" id="medium"> <br>
        <label for="big">Duża</label>
        <input type="radio" value="big" name="size" id="big"> <br>

        <label for="distance">Odległość [km] (do 5km za darmo): </label>
        <input type="number" name="distance" id="distance"> <br>

        <input type="submit" value="ZAMÓW"> <br>
    </form>

    <?php
    
        if(!isset($_POST["size"]) || empty($_POST["distance"])) {
            echo "Wprowadź wszystkie dane!";
        } else {
            $finalCost = 0;
            $distance = $_POST["distance"];

            switch ($_POST["size"]) {
                case "small":
                    $finalCost += 30;
                    break;
                case "medium":
                    $finalCost += 40;
                    break;
                case "big":
                    $finalCost += 50;
                    break;
            }
            echo $finalCost;

            if($distance > 20) {
                echo "Zbyt duży dystans <br>";
            }elseif ($distance > 5) {
                $distance -= 5;
                $finalCost += ($distance*1.50); 
            }


            $paragon = array(
                "koszt pizzy" => $finalCost,
                "odleglosc" => $_POST["distance"],
                "koszt dowozu" => ($distance*1.50),
                "razem do zaplaty" => $finalCost
            );

            print_r($paragon);
        }
    ?>

</body>
</html>