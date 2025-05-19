<?php
    $idConnect = mysqli_connect("localhost", "root", "", "dane");
    $tytul = $_POST['tytul'];
    $gatunek = $_POST['gatunek'];
    $rok = $_POST['rok'];
    $ocena = $_POST['ocena'];
    print_r($_POST);

    $query = "INSERT INTO filmy VALUES(NULL,$gatunek,4,'$tytul',$rok,$ocena);";

    $state = mysqli_query($idConnect, $query);
    
    echo $state."<br>";
    echo "Film $tytul został dodany do bazy <br>";
    
    mysqli_close($idConnect);
?>