<?php
    $conn = mysqli_connect("localhost", "root", "", "ratownictwo");

    $zespol = $_POST['zespol'];
    $dyspozytor = $_POST['dyspozytor'];
    $adres = $_POST['adres'];

    $time = time();
    //echo $time."<br>";
    $time = date("H:i:s", $time);
    //echo $time;

    $query = "INSERT INTO zgloszenia VALUES (null,$zespol,$dyspozytor,'$adres',0,'$time');";

    mysqli_query($conn, $query);

    mysqli_close($conn);

    header("Location: pogotowie.html");
?>