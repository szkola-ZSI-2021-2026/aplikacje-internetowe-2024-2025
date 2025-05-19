<?php
    $conn = mysqli_connect("localhost", "root", "", "wedkarstwo2");
    
    $lowisko = $_POST['lowisko'];
    $date = $_POST['date'];
    $sedzia = $_POST['sedzia'];

    $query = "INSERT INTO zawody_wedkarskie VALUES(NULL,0,$lowisko,'$date','$sedzia');";

    mysqli_query($conn, $query);

    header("Location: zawody.html");

    mysqli_close($conn);
?>