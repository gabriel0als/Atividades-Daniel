<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            font-size: 30px;
            width: 40vw;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <?php

        require_once("modelo/Presidente.php");

        function desenharLista(object $p) {
            return "<tr>
                            <td>" . $p->getNumero() . "</td>
                            <td>" . $p->getNome() . "</td>
                            <td>" . $p->getInicio() . "</td>
                            <td>" . $p->getFim() . "</td>
                        </tr>";
        }


        $presidentes = array();

        $p1 = new Presidente();
        $p1->setNumero(16);
        $p1->setNome("Eurico Gaspar Dutra");
        $p1->setInicio(1946);
        $p1->setFim(1951);
        array_push($presidentes, $p1);

        $p2 = new Presidente();
        $p2->setNumero(17);
        $p2->setNome("Getúlio Vargas");
        $p2->setInicio(1951);
        $p2->setFim(1954);
        array_push($presidentes, $p2);

        $p3 = new Presidente();
        $p3->setNumero(18);
        $p3->setNome("Café Filho");
        $p3->setInicio(1954);
        $p3->setFim(1955);
        array_push($presidentes, $p3);

        $p4 = new Presidente();
        $p4->setNumero(19);
        $p4->setNome("Carlos Luz");
        $p4->setInicio(1955);
        $p4->setFim(1955);
        array_push($presidentes, $p4);

        $p5 = new Presidente();
        $p5->setNumero(20);
        $p5->setNome("Nereu Ramos");
        $p5->setInicio(1955);
        $p5->setFim(1956);
        array_push($presidentes, $p5);

        $p6 = new Presidente();
        $p6->setNumero(21);
        $p6->setNome("Juscelino Kubitschek");
        $p6->setInicio(1955);
        $p6->setFim(1961);
        array_push($presidentes, $p6);

        print "<table border=1>";
                    print"<tr>";
                        print"<th>Número</th>";
                        print"<th>Nome</th>";
                        print"<th>Início</th>";
                        print"<th>Fim</th>";
                    print"</tr>";
                
        foreach($presidentes as $p) {
            $tabela = desenharLista($p);
            print $tabela;
        }

        print "</table>";

    ?>
</body>
</html>

