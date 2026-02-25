<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associativo</title>
    <style>
        body {
            background-color: lightpink;
        }
    </style>
</head>
<body>
    <?php

    $retangulo = [
                ["base" => 20, "altura" => 10],
                ["base" => 15, "altura" => 18],
                ["base" => 20, "altura" => 16]
    ];

    $area = 0;
    foreach ($retangulo as $r) {
        $area = $r["base"] * $r["altura"];
        print "<br>A área desse retângulo é: $area<br>";
    }

    //http://localhost/gabrielindo/11-02/associativo.php

    ?>
</body>
</html>