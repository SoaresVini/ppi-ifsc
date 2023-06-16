<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="home.css">
    <title>Users</title>

    <style>
        button {
            margin-left: 40px;
            padding: 5px;
            font-size: 14px;
            cursor: pointer;
            border: 1px solid black;
            border-radius: 10px;
        }

        button:hover{
            background-color: rgb(165, 31, 165);
        }

        ul {
            display : flex;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
            padding-left: 0;
            list-style-type: none;
        }
        li {
            background-color: rgb(223, 204, 36);
            margin-bottom: 10px;
            border: 2px solid black;
            border-radius: 10px;
            height: 80px;
            width: 500px;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 20px;
        }

        .pesquisa{
            display: flex;
            flex-direction: row;
            align-items: center;
            margin: 10px;
            margin-top: 20px;
        }

        input[type=text]{
            width: 100%;
            height: 30px;
            border-radius: 10px;
            border: 1px solid black;
            padding-left: 10px;
            font-size: 16px;
            margin: 10px;
        }

        input[type=button]{
            width: 100px;
            height: 30px;
            border-radius: 10px;
            border: 1px solid black;
            background-color: rgb(223, 204, 36);
            cursor: pointer;
            margin: 10px;

        }
        
        input[type=button]:hover{
            background-color: white;
        }

    </style>
</head>
<body>

<header>

    <h1>Cadastro de Usuarios</h1>

</header>
<nav>
   
   <div>
   <a href="home.php">Home</a>
     <a href="cadastro.html">Cadastrar Usuario</a>
     <a href="Logout.php">Logout</a>
   </div>

   <div>
     <?php
       session_start();
       if (!isset($_SESSION['login'])) {
         header('location: login.html');
       }
       echo "<p> $_SESSION[login] </p>";
       ?>
   </div>
 </nav>

 <div id="pesquisa">
    <input type='text' placeholder='Pesquisar......' autofocus='true' name='pesquisa' class='text' id='pesquisaInput' />

    <input type="button" value="Pesquisar" id="text" onclick="pesquisarUsuarios()">

 </div>
 

 <?php
    include_once "db.php";

    if (isset($_SESSION['resultado'])) {
        $pesquisa = $_SESSION['resultado'];
    
        // Verificar se a pesquisa não está vazia
        if (!empty($pesquisa)) {
            // A pesquisa retornou resultados
            foreach ($pesquisa as $row) {
                echo "<ul>";
                echo "<li class='usuario'>
                        Nome: {$row['nome']} <br>
                        Email: {$row['login']} <br>
                        Tel: {$row['telefone']} <br>
                        Data de Nascimento: {$row['dataNasc']}
                        <button onclick=\"deleteUser({$row['id']})\">Excluir</button>
                        <button onclick=\"alterarUser({$row['id']})\">Alterar</button>
                    </li>";
                echo "</ul>";
            }
        } else {
            echo "<p>Nenhum usuário encontrado.</p>";
        }
    } else {
        $users = recuperaAll();
    
        // Verifica se existem registros retornados
        if (!empty($users)) {
            echo "<ul>";
            foreach ($users as $user) {
                echo "<li class='usuario'>
                        Nome: {$user['nome']} <br>
                        Email: {$user['login']} <br>
                        Tel: {$user['telefone']} <br>
                        Data de Nascimento: {$user['dataNasc']}
                        <button onclick=\"deleteUser({$user['id']})\">Excluir</button>
                        <button onclick=\"alterarUser({$user['id']})\">Alterar</button>
                    </li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum usuário cadastrado.</p>";
        }
    }
    
?>

<script>
    function deleteUser(id) {
        if (confirm("Deseja confirmar esta ação?")) {
            window.location.href = 'delete.php?id=' + id;
        } else {
            alert("Ação cancelada.");
        }
        
    }

    function alterarUser(id) {
        window.location.href = 'alterar.php?id=' + id;
    }

    function pesquisarUsuarios() {
    var pesquisa = document.getElementById('pesquisaInput').value;
    window.location.href = 'pesquisa.php?pesquisa=' + pesquisa;
}

</script>

</body>
</html>
