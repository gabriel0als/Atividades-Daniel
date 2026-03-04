<?php

    require_once("modelo/Link.php");

    print("<link rel='stylesheet' href='botao_imagem.css'>");

    function desenhaBotao($array) {
        print("<div class='dropdown'>
                    <button class='dropbtn'>Botão</button>
                    <div class='dropText'>");

                    foreach ($array as $a) {
                        print("<span><img src='" . $a->getLinkImg() . "' width='20' height='20'>" . $a->getInfo() . "</span>");
                    }
                    
                    print("</div>
                </div>");
    };

    $times = array();
    $t1 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Gremio_logo.svg/250px-Gremio_logo.svg.png", "Gremio");
    array_push($times, $t1);
    $t2 = new Link("https://a.espncdn.com/i/teamlogos/soccer/500/1936.png", "Internacional");
    array_push($times, $t2);
    $t3 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Logo_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.svg/1280px-Logo_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.svg.png", "Chapecoense");
    array_push($times, $t3);

    desenhaBotao($times);

    $paises = array();
    $p1 = new Link("https://static.todamateria.com.br/upload/ba/nd/bandeira-do-brasil-og.jpg", "Brasil");
    array_push($paises, $p1);
    $p2 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/1280px-Flag_of_Argentina.svg.png", "Argentina");
    array_push($paises, $p2);
    $p3 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/960px-Flag_of_the_People%27s_Republic_of_China.svg.png", "China");
    array_push($paises, $p3);

    desenhaBotao($paises);

    $jogos = array();
    $j1 = new Link("https://upload.wikimedia.org/wikipedia/commons/7/7c/Fortnite_F_lettermark_logo.png", "Fortnite");
    array_push($jogos, $j1);
    $j2 = new Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG2xsYIIlVmELV2JVwe4EPRI8MVRVz6rtgqg&s", "Minecraft");
    array_push($jogos, $j2);
    $j3 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Roblox_%282025%29_%28App_Icon%29.svg/960px-Roblox_%282025%29_%28App_Icon%29.svg.png", "Roblox");
    array_push($jogos, $j3);

    desenhaBotao($jogos);

    $animais = array();
    $a1 = new Link("https://www.infoescola.com/wp-content/uploads/2008/04/urso.jpg", "Urso");
    array_push($animais, $a1);
    $a2 = new Link("https://premierpet.com.br/wp-content/uploads/2025/04/model-banner-dicasprimeirocachorro-mobile-v1.png", "Cachorro");
    array_push($animais, $a2);
    $a3 = new Link("https://images.unsplash.com/photo-1563409236302-8442b5e644df?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGF0b3xlbnwwfHwwfHx8MA%3D%3D", "Pato");
    array_push($animais, $a3);

    desenhaBotao($animais);

    



?>