<?php

include_once "db.php";

$nome = $_POST['nome'];
$login = $_POST['email'];
$senha = $_POST['password'];
$telefone = $_POST['telefone'];
$dataNasc = $_POST['data'];
$vemCad = $_POST['isBoolean'];

$dataFormatada = date('Y-m-d', strtotime($dataNasc));

if (conectaBD()) {

  echo insert($nome, $login, $senha, $telefone, $dataFormatada);

  if($vemCad != 1){
    header('Location: index.html');
  }else{
    header('Location: cadastro.html');
  }

} else {
  echo "Erro ao conectar";
}

?>