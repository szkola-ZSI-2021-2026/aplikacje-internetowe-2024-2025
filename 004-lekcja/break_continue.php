<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Break i continue</h1>
    <?php
        $a = 0;
        while ($a < 10) {
            if ($a == 5) {
                $a++;
                continue;
            }

            // if ($a == 5) 
            //     break;

            echo "$a ";
            $a++;
        }
    ?>
</body>
</html>