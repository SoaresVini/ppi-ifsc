<?php
include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos do formulário foram preenchidos
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['telefone']) && !empty($_POST['data'])) {
        // Obtém os valores dos campos do formulário
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $telefone = $_POST['telefone'];
        $dataNasc = $_POST['data'];

        // Chama a função para atualizar o usuário no banco de dados

        atualizaUser($id, $nome, $email, $senha, $telefone, $dataNasc);

        // Redireciona o usuário de volta para a página de detalhes do usuário

        header("Location: home.php");
 
    } else {
        echo "<script> alert(Preencha todos os campos do formulário.) </script>";
    }
} else {
    echo "<script> alert(Método de requisição inválido.) </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>

#btn{
  position: absolute;
  top: 0;
  left: 0;
  margin: 20px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #661279;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
}

#btn:hover{
  background-color: #fff;
  color: #000;
  transition: 0.5s;
}


</style>
</head>


<body>

    <?php
    include_once "db.php";

    // Definir variáveis iniciais
    $id = '';
    $nome = '';
    $email = '';
    $senha = '';

    // Verifica se o parâmetro de ID foi fornecido na URL
    if (isset($_GET['id'])) {
        // Obtém o ID do usuário da URL
        $id = $_GET['id'];

        // Chama o método recuperaUser para obter os detalhes do usuário
        $user = recuperaUser($id);

        if (!empty($user)) {
                // Exibe os detalhes do usuário
                
                // Captura os valores dos campos de formulário
            $nome = $user['nome'];
            $email = $user['login'];
            $senha = $user['senha'];
            $telefone = $user['telefone'];
            $dataNasc = $user['dataNasc'];
                
            echo " 
            <div class='page'>

            

            <form class='formCad' action='alterar.php' method='POST'>

            <h1>Alterando Cadastro</h1>
            <p>Digite os seus dados para se cadastrar.</p>

              <label for='nome'>Nome</label>
              <input type= 'text'placeholder='Digite seu Nome' autofocus='true' name='nome' class='text' value='$nome'/>

              <label for='email'>E-mail </label>
              <input type='email' placeholder='Digite seu e-mail' autofocus='true' name='email' class='text' value='$email' />
  
              <label for='password'>Senha</label>
              <input type='password' placeholder='Digite sua senha' name='password' class='text' value='$senha'/>
  
              <label for='data'>Data de Nascimento</label>
              <input type='date' placeholder='Digite sua senha' name='data' class='text' value='$dataNasc'/>
  
              <label for='telefone'>Telefone</label>
              <input type='text' placeholder='(00) 0000-0000' name='telefone' class='text' value='$telefone'/>
  
              <input type='submit' value='Confirmar' class='btn' />
  
  
            </form>
          </div>
      
          <script>

          $(document).ready(function() {
            $('input[name='telefone']').mask('(00) 0000-0000');
          });
  
          </script>
          
          ";
            } else {
                echo "<p>Usuário não encontrado.</p>";
            }
        } else {
            echo "<p>Nenhum ID de usuário fornecido.</p>";
           
        }
        ?>

</body>
</html>