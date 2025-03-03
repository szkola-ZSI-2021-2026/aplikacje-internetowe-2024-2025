<?php
    setcookie("ciasteczko1", "jeden");
    setcookie("ciasteczko2", "dwa");
    if(isset($_COOKIE["ciasteczko3"])){
        $cookieInfo = "Wartość ciasteczka3: ".$_COOKIE["ciasteczko3"]."<br>";
    }else {
        $cookieInfo = "Brak ciasteczka3 <br>";
        setcookie("ciasteczko3", "trzy");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciasteczka</h1>

    <?php
        if(isset($_COOKIE["ciasteczko1"])){
            echo "cisteczko1 istnieje <br>";
        }

        echo $cookieInfo;
    ?>
</body>
</html>