

<?php
    if(!(isset($_GET["peso"]) && isset($_GET["altura"]))){

        echo "<script> 
        
            alert('Querido usuário favor informar o seu peso e altura!');
        
        </script>";

    }

        $a = $_GET["peso"];
        $b = $_GET["altura"];

        if(($a == null || $b == null) ){
            echo "<script> 
        
            alert('VSFD MANINHO');
            
            window.location.href= 'index.html';
        
        </script>";
            exit();
        }

    
        function imc($peso, $altura){
            return $peso/($altura*$altura);
        }
    
        echo "O imc é ".imc($a,$b);

   
?>