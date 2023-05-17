<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>

    <style>
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
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

<div class="tela">
        <form action="imc.php" method="get">

            <label for="peso">Peso:(KG)</label>
            <input type="text" name="peso" id="">
    
            <label for="altura">Altura:(KG)</label>
            <input type="text" name="altura" id="">
    
            <input class="button" type="submit" value="Calcular">
 
        </form>
</div>
        
</body>
</html>
