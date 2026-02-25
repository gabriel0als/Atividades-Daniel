<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        table {
            min-width: 800px;
            min-height: 100%;
        }
    </style>
</head>
<body>
    <?php

    function desenharLinha(array $cid) {
        return print "<tr>
                        <td>" . $cid["nome"] . "</td>
                        <td>" . $cid["habitantes"] . "</td>
                        <td>" . $cid["area_km2"] . "</td>
                        <td>" . $cid["altitude_m"] . "</td>
                        <td>" . $cid["estado"] . "</td>
                    </tr>";
    }

        $cidades = [
            [
                "nome" => "Foz do Iguaçu",
                "habitantes" => 250000,
                "area_km2" => 500,
                "altitude_m" => 145,
                "estado" => "Paraná-PR"
            ],
            [
                "nome" => "Cascavel",
                "habitantes" => 300000,
                "area_km2" => 420,
                "altitude_m" => 320,
                "estado" => "Paraná-PR"
            ],
            [
                "nome" => "Chapecó",
                "habitantes" => 240000,
                "area_km2" => 120,
                "altitude_m" => 620,
                "estado" => "Santa Catarina-SC"
            ],
            [
                "nome" => "Blumenau",
                "habitantes" => 330000,
                "area_km2" => 200,
                "altitude_m" => 85,
                "estado" => "Santa Catarina-SC"
            ],
            [
                "nome" => "Curitiba",
                "habitantes" => 1500000,
                "area_km2" => 300,
                "altitude_m" => 850,
                "estado" => "Paraná-PR"
            ]
        ];

        print"<table border=1>";
            print"<tr>";
                print"<th>Nome</th>";
                print"<th>Habitantes</th>";
                print"<th>Área</th>";
                print"<th>Altitude</th>";
                print"<th>Estado</th>";
            print"</tr>";

        foreach ($cidades as $c) {
            desenharLinha($c);
        };

        print"</table>";
    ?>
</body>
</html>