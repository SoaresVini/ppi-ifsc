<?php
include_once "db.php";


if (isset($_GET['id'])) {
    // Obtém o ID do usuário da URL
    $id = $_GET['id'];

        // Chama a função para deletar o usuário no banco de dados

        deletaUser($id);

        // Redireciona o usuário de volta para a página de detalhes do usuário

        header("Location: index.html");

 
    } else {
        echo "<p>Preencha todos os campos do formulário.</p>";
    }


?>