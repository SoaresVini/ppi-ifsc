<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="page">
    <form action="index.php" class="formLogin" method="post">
      <h1>Login</h1>
      <p>Digite os seus dados para se conectar</p>
      <label for="email">E-mail</label>
      <input type="email" placeholder="Digite seu e-mail" autofocus="true" name="email" class="text" />
      <label for="password">Senha</label>
      <input type="password" placeholder="Digite sua senha" name="password" class="text" />
      <input type="submit" value="Acessar" class="btn" />
    </form>
   
    <p>Não possui cadasto<a href="cadastrologin.html">Clique Aqui</a></p>
    
  </div>
</body>

</html>

<?php

require_once 'App\model\user.php';
require_once 'App\model\userDao.php';


$login = $_POST['email'];
$senha = $_POST['password'];

$verifica = $userDao->verificaUser($login, $senha);

if ($verifica == true){
  session_start();
  $_SESSION['login'] = $login;
  header('Location: home.php');
}else{
  echo 'Não logado';
}



?>