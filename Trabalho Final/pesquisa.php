<?php
include_once "db.php";

if (isset($_GET['pesquisa'])) {
    
    $pesquisa = $_GET['pesquisa'];

    
    // Obtém os resultados da consulta
    session_start();
    $_SESSION['resultado'] = recuperaPorNome($pesquisa);

    header("Location: home.php");
     
}else {
    echo "<p>Preencha todos os campos do formulário.</p>";
}
?>