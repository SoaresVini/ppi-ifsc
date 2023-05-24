<?php

$login = $_POST['email'];
$senha = $_POST['password'];

if ($login == "vini@soares" && $senha == "123") {
  echo "login efetuado com sucesso";
  session_start();
  $_SESSION['login'] = $login;
  echo "<script>
        setTimeout(
          function(){
            window.location.href='home.php' });
      </script>";
} else {
  echo "login ou senha inválidos";
}

?>