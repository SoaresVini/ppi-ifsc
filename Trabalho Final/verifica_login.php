<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    body{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    #barra{
      width: 300px;
      height: 20px;
      border-radius: 10px;
      background-color: red;
    }
    #progresso{
      height: 100%;
      border-radius: 10px;
      background-color: blue;
    }

    p{
      position: absolute;
      top: 50%;
      left: 50%;
      color: black;
    }

  </style>
</head>
<body>
    

    <?php
    include_once "db.php";

    
    $login = $_POST['email'];
    $senha = $_POST['password'];

    if (verificaLoginSenha($login, $senha)){

      echo '
        <div id="barra">
          <div id="progresso"></div>
        </div>
        <p>0%</p>
        ';

      session_start();
      $_SESSION['login'] = $login;

      echo 
      
      '
      <script>
        setTimeout(function() {
        const progresso = document.getElementById("progresso")
    
        var text = document.querySelector("p");
    
        for (let i = 3; i <= 10; i++) {
          setTimeout(function() {
            progresso.style.width = `${i * 10}%`;
            text.innerHTML = `${i * 10}%`;
    
            if (i == 10) {
              
              setTimeout(function() {
                window.location.href="home.php"
                alert("Login efetuado com sucesso!")
              }, 600);
            }
          }, i * 600);
        }
        
        }, 600)
    
      </script>

      ';

      } else {

        echo 
        '
        <script>
          alert("login ou senha inválidos")
          window.location.href="login.html"
        </script>
        '     ;
    }

    ?>

    
    
</body>
</html>

