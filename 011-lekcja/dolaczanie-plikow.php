<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include & require</title>
</head>
<body>
    <h1>Witaj na stronie</h1>
    <h3>INCLUDE</h3>
    <?php
    // include - zwraca ostrzezenie i nie przerywa dalszego skryptu, mozna wykorzystywac kilkukrotnie
        include("include-require.php");
    // include_once  - jesli plik zostal dolaczony, kolejny raz nie dolacza
        include_once("include-require.php");
    ?>
    <h3>REQUIRE</h3>
    <?php
    // require - zwraca blad i przerywa dalszego skryptu, mozna wykorzystywac kilkukrotnie
        require("include-require.php");
    // require_once - jesli plik zostal dolaczony, kolejny raz nie dolacza, ale sprawdza tez includy
        require_once("include-require.php");
    ?>

</body>
</html>