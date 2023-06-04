<?php

include_once "db.php";

$nome = $_POST['nome'];
$login = $_POST['email'];
$senha = $_POST['password'];


if (conectaBD()) {

  echo insert($nome, $login, $senha);

  header('Location: login.html')

  //echo "<BR><PRE>";
 // var_dump(recuperaAll());


  //echo "</PRE>";

} else {
  echo "Erro ao conectar";
}



?>