<?php
    function cria_array_random($n){

        $vetor_result = array();

        for($i=0;$i<$n;$i++){
            $vetor_result[$i] = rand(0,100);
        }

        return $vetor_result;
    }

    $array=cria_array_random(100);

    for($i=0;$i<count($array);$i++){
        echo " $array[$i] <br>";
    }

    $soma=0;
    foreach($array as $valor){
        $soma = $soma + $valor;
    }

    echo "Valor total = $soma ";


?>