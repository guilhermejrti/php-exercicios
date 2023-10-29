<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $email = $_GET["email"];
    $nome = $_GET["nome"];

   ?>

            <h1>Dados recebidos!</h1>
            <br>
            

            <?php
            echo "<h2>Bem vindo $nome! <br> O email que você cadastrou foi: $email </h2>";
            ?>

  
</body>
</html>