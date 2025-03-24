<?php
    $conn = mysqli_connect("localhost", "root", "", "ratownictwo");

    $zespol = $_POST['zespol'];
    $dyspozytor = $_POST['dyspozytor'];
    $adres = $_POST['adres'];

    $query = "INSERT INTO zgloszenia VALUES (null,$zespol,$dyspozytor,'$adres',0,CURRENT_TIME);";

    mysqli_query($conn, $query);

    mysqli_close($conn);

    header("Location: pogotowie.html");
?>