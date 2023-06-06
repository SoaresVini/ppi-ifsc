<?php

include_once "db.php";

$nome = $_POST['nome'];
$login = $_POST['email'];
$senha = $_POST['password'];


if (conectaBD()) {

  echo insert($nome, $login, $senha);

  header('Location: login.html');
  
} else {
  echo "Erro ao conectar";
}



?>