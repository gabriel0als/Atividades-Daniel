<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: solid 4px black;
            width: 40vw;
            border-collapse: collapse;
        }

        th {
            background-color: gainsboro;
            border: solid 2px black;
            height: 40px;
        }

        td {
            border: solid 2px red;
            font-size: 20px;
        }

        .caixa-data {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        body {
            display: flex;
            justify-content: center;

        } 

        img {
            padding-right: 20px;
        }


    </style>
</head>
<body>
    <?php

    function desenharLinha(array $m) {
        return print "<tr>
                        <td>" . $m["Ordem"] . "</td> 
                        <td>" . "<div class='caixa-data'>" . $m["Bandeira"] . $m["País"] . "</div>" . "</td>
                        <td>" . $m["Ouro"] . "</td>
                        <td>" . $m["Prata"] . "</td>
                        <td>" . $m["Bronze"] . "</td>
                        <td>" . $m["Total"] . "</td>
                    </tr>";
    }

        $matriz = [
            [
                "Ordem" => "1",
                "Bandeira" => "<img src='https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg' alt='' width='100' height='100%'</img>",
                "País" => "Estados Unidos",
                "Ouro" => "46",
                "Prata" => "37",
                "Bronze" => "38",
                "Total" => "121"
            ],
            [
                "Ordem" => "2",
                "Bandeira" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Great_Britain_%281707%E2%80%931800%29.svg/1280px-Flag_of_Great_Britain_%281707%E2%80%931800%29.svg.png' alt='' width='100' height='100%'</img>",
                "País" => "Grã-Bretanha",
                "Ouro" => "27",
                "Prata" => "23",
                "Bronze" => "17",
                "Total" => "67"
            ],
            [
                "Ordem" => "3",
                "Bandeira" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/3840px-Flag_of_the_People%27s_Republic_of_China.svg.png' alt='' width='100' height='100%'</img>",
                "País" => "China",
                "Ouro" => "26",
                "Prata" => "18",
                "Bronze" => "26",
                "Total" => "70"
            ],
            [
                "Ordem" => "4",
                "Bandeira" => "<img src='https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Russia.svg' alt='' width='100' height='100%'</img>",
                "País" => "Rússia",
                "Ouro" => "19",
                "Prata" => "17",
                "Bronze" => "20",
                "Total" => "56"
            ],
            [
                "Ordem" => "5",
                "Bandeira" => "<img src='https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Germany.svg' alt='' width='100' height='100%'</img>",
                "País" => "Alemanha",
                "Ouro" => "17",
                "Prata" => "10",
                "Bronze" => "15",
                "Total" => "42"
            ],
        ];

        print "<table border=1>";
            print"<tr>";
                print"<th>Ordem</th>";
                print"<th>País</th>";
                print"<th>Ouro</th>";
                print"<th>Prata</th>";
                print"<th>Bronze</th>";
                print"<th>Total</th>";
            print"</tr>";

        foreach ($matriz as $m) {
            desenharLinha($m);
        }

        print "</table>";

    ?>
</body>
</html>