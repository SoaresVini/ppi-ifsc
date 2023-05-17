<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>

    <form action="" method="POST">
        <label for="">Digite o tamnaho da array</label>
        <input type="number" name="valor" id="">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

<?php

    function cria_array_random($n){

        $vetor_result = array();

        for($i=0;$i<$n;$i++){
            $vetor_result[$i] = rand(0,100);
        }

        return $vetor_result;
    }

    function soma_array($array){
        $soma=0;
        foreach($array as $valor){
            $soma = $soma + $valor;
        }
        return $soma;
    }

    if(isset($_POST['valor'])){
       
        echo "A soma dos valores é: ".soma_array(cria_array_random($_POST['valor']));
        
    }

?>