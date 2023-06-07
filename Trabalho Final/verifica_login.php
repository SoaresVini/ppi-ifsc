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
      session_start();
      $_SESSION['login'] = $login;
      header('Location: home.php'); 
    }else {
      header('Location: login.html');
    }
    ?>

</body>
</html>

