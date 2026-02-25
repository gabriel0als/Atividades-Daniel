<?php

    $listaA = [25, 13, 17];
    $listaB = [12, 20, 43];
    $listaC = [22, 18, 25];

    for ($i=0; $i < 3; $i++) { 
        $media = CalcularMedia($listaA[$i], $listaB[$i], $listaC[$i]);
        print "<br>A média aritmética é: $media<br>";
    }

    function CalcularMedia($a, $b, $c) {
        $media = ($a + $b + $c) / 3;

        return $media;
    }

//http://localhost/gabrielindo/11-02/media.php

?>
