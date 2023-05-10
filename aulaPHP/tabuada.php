<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="numero"></label>
        <input type="text" name="numero">
        <input type="Submit" value="Calcular">
    </form>

    <?php
       
        if(isset($_GET['numero'])){
            $num = $_GET['numero'];
            if(!($num == null)){
                for ($i = 0; $i<=10; $i++){ 
                
                    $calc = $num * $i;
                    ?>
                    <p> <?php echo "$num * $i = $calc" ?> </p>
    
                <?php
            }
            }else{
                echo "<script> 
            
                alert('VSFD MANINHO');
                
                window.location.href= 'tabuada.php';
            
                </script>";
                exit();
            }      
        } 
    ?>
</body>
</html>