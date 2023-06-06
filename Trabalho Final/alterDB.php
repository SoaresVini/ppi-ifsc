<?php
include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos do formulário foram preenchidos
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // Obtém os valores dos campos do formulário
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['password'];

        // Chama a função para atualizar o usuário no banco de dados

        atualizaUser($id, $nome, $email, $senha);

        // Redireciona o usuário de volta para a página de detalhes do usuário

        header("Location: user.php");
 
    } else {
        echo "<p>Preencha todos os campos do formulário.</p>";
    }
} else {
    echo "<p>Método de requisição inválido.</p>";
}
?>