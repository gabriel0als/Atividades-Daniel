<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
    <?php  
    
        $carro = [
                ["modelo" => "Uno", "marca" => "Fiat", "link" => "https://s2-autoesporte.glbimg.com/JudyF3dksvAjUwEAV-QAZr1BvE8=/0x246:1980x1452/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2024/6/f/CuXZRKTny92pBpjfQDdA/1984-001.jpg"],
                ["modelo" => "Fusion", "marca" => "Ford", "link" => "https://cdn.motor1.com/images/mgl/m691A/s1/ford-fusion-2019-br.jpg"],
                ["modelo" => "Gol", "marca" => "Volkswagem", "link" => "https://s2-autoesporte.glbimg.com/cLS9YuETrY8RuxUi6T75zDhC9nI=/0x0:620x400/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/1/0/G8sKTMRzCMWV3LxOvGIg/2015-03-09-volkswagen-gol-bluemotion.jpg"],
                ["modelo" => "911", "marca" => "Porsche", "link" => "https://cdn.motor1.com/images/mgl/vxnmnK/s1/911-carrera-gts-2025.jpg"],
                ["modelo" => "r8", "marca" => "Audi", "link" => "https://i.pinimg.com/564x/d7/ed/79/d7ed79dcd9f02d85053583432479c3f5.jpg"]
        ];

        foreach ($carro as $c) {
            print "<div style='border: solid 1px; width: 300px; margin-top: 20px'>
            " . $c["modelo"] . "<br>" . $c["marca"] . "<br><img style='width: 100%; height: auto;' src='" . $c["link"] . "' /><br></div>";
        }
    
    
    ?>
</body>
</html>