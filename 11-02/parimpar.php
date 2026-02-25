<?php

$par = 0;
$impar = 0;
for ($i=20; $i <= 70; $i++) { 
    if ($i % 2 == 0) {
        $par += $i;
    } else {
        $impar += $i;
    }
}

print "<br>A soma dos números pares é $par<br>";
print "A soma dos números impares é $impar\n";

//http://localhost/gabrielindo/11-02/parimpar.php

?>