<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista pokemon</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        img {
            height: 100px;
        }

    </style>
</head>
<body>
    <?php

        require_once("modelo/Pokemon.php");

        function desenharTabela($p) {
                $dados = print("<tr>");
                $dados += print("<td>" . $p->getNome() . "</td>");
                $dados += print("<td>" . $p->getTipo() . "</td>");
                $dados += print("<td>" . $p->getPeso() . "</td>");
                $dados += print("<td>" . $p->getGeracao() . "</td>");
                $dados += print("<td><img src='" .  $p->getImagem() . "' alt=''></td>");
                $dados += print("</tr>");
                return $dados;
        }

        $pokemons = array();

        $p1 = new Pokemon();
        $p1->setNome("Charmander");
        $p1->setTipo("Fogo");
        $p1->setPeso(10);
        $p1->setGeracao(1);
        $p1->setImagem("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/detail/004.png");
        array_push($pokemons, $p1);

        $p2 = new Pokemon();
        $p2->setNome("Rowlet");
        $p2->setTipo("Planta");
        $p2->setPeso(20);
        $p2->setGeracao(7);
        $p2->setImagem("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/722.png");
        array_push($pokemons, $p2);

        $p3 = new Pokemon();
        $p3->setNome("Rayquaza");
        $p3->setTipo("Dragão");
        $p3->setPeso(200);
        $p3->setGeracao(4);
        $p3->setImagem("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/384.png");
        array_push($pokemons, $p3);

        $p4 = new Pokemon();
        $p4->setNome("MewTwo");
        $p4->setTipo("Psíquico");
        $p4->setPeso(60);
        $p4->setGeracao(1);
        $p4->setImagem("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/150.png");
        array_push($pokemons, $p4);

        $p5 = new Pokemon();
        $p5->setNome("Froakie");
        $p5->setTipo("Água");
        $p5->setPeso(10);
        $p5->setGeracao(6);
        $p5->setImagem("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/656.png");
        array_push($pokemons, $p5);

        print("<table border='10'>");

            print("<tr>");
                print("<td>Nome</td>");
                print("<td>Tipo</td>");
                print("<td>Peso</td>");
                print("<td>Geração</td>");
                print("<td>Imagem</td>");
            print("</tr>");

        foreach ($pokemons as $p) {
            desenharTabela($p);
        }
            print("</table>");

        ?>
</body>
</html>

