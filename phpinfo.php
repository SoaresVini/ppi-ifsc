<?php

    $valor_a=10;
    $valor_b=20;
    $valor_c="bla,bla,bla";

    var_dump($valor_c);

    $valor_a=10;
    $valor_b=20;

    function soma($a, $b){
        return $a + $b;
    }

    $soma = $valor_a + $valor_b;

    echo "<h1>Soma $valor_a + $valor_b = ".soma($valor_a,$valor_b)."</h1>";

    echo '<h1>Soma a+b = $valor_c</h1>';

?>