<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cores</title>
</head>
<body>
    <?php 

        $cores = ["yellow", "blue", "black", "green", "red", "purple", "gray", "brown"];
        
        for ($i=0; $i < 8; $i++) { 
            print "<div style='background-color: " . $cores[$i] . "; width: 100px; height: 100px;'>Hello friend</div>";
        }
    ?>
</body>
</html>