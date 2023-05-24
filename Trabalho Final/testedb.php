<?php
include_once "db.php";

if (conectaBD()) {
  echo "Conectado som sucesso";


  echo insert("vini", "vini@soares", 123);

  echo "<BR><PRE>";
  var_dump(recuperaAll());


  echo "</PRE>";

} else {
  echo "Erro ao conectar";
}



?>