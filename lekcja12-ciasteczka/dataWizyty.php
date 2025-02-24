<?php
    if(isset($_COOKIE['data'])){
        $dataWizyty = "Witaj ponownie na stronie. Data twoich ostatnich odwiedzin ".$_COOKIE['data']."<br>";
    }else {
        $dataWizyty = "Witaj na stronie po raz pierwszy <br>";
        setcookie('data',date("y-m-d H:i:s"),time()+10);
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
    <h1>Data wizyty</h1>
    <?php
    
        echo $dataWizyty;
        //echo date("y-m-d H:i:s");
    
    ?>
</body>
</html>