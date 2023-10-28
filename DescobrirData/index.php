<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    date_default_timezone_set("America/Rio_Branco");

    echo "A data de hoje é: " .date("d/m/y");
    echo "<br>";
    echo "A hora é " .date("G:i:s");
    echo "<br>";
    echo "Fuso Horário: " .date("T");
    ?>
</body>
</html>