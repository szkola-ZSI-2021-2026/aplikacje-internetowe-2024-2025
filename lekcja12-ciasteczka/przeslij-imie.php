<?php
    if(empty($_POST['name'])){
        echo "Nie podałeś danych <br>";
        echo "<a href='imie.php'><button>Wróć</button></a>";
    } else {
        if(!isset($_COOKIE['dane'])){
            echo "Witaj ".$_POST['name']."<br>";
            setcookie('dane', $_POST['name'], time()+5);
            echo "<a href='imie.php'><button>Wróć</button></a>";
        }
    }
?>