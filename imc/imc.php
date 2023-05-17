<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados User</title>

    <style>
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
        }
        #resultado{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 150px;
            height: 50px;
            border: 1px solid black;
            border-radius: 5px;
            margin: 10px;
        }
        .tela{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            border: 1px solid black;
            border-radius: 5px;
        }
        .button{
            padding: 10px;
            margin: 10px;
        }

        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

    </style>
</head>
<body class="container">

    <?php
    session_start();
        function imc($peso, $altura){
            return $peso/($altura*$altura);
        }
    ?>

    <div id="resultado">
       <p>
        <?php  
            $imc = imc($_GET['peso'],$_GET['altura']);
            $_SESSION['imc'] = $imc;
            echo $imc?>
       </p> 
    </div>  
    
    <div class=tela>
    <form action="resultado.php" method="post">
        <label for="Gmail">Email:</label>
        <input type="text" name="Gmail" id="">
    
        <label for="Nome">Nome:</label>
        <input type="text" name="Nome" id="">
    
        <input class="button"type="submit" value="Enviar">

    </form>
    </div>

</body>
</html>


        

        



