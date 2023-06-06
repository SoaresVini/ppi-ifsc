<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="home.css">
    <title>Users</title>

    <style>
        button {
            padding: 5px;
            font-size: 14px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
            border: 2px solid black;
            border-radius: 20px;
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
            margin-bottom: 10px;
            border: 2px solid black;
            height: 60px;
            width: 350px;
            display: flex;
            flex-direction: row;
            align-items: center;
            background-image: linear-gradient(to bottom,rgb(208, 15, 208) ,rgb(136, 9, 136));
            padding: 10px;
        }
        button {
            margin-left: 10px;
            opacity: 0;
        }
        button:hover {
            opacity: 1;
        }
    </style>
</head>
<body>

<header>

    <h1>Triste Vida de um Veterano do IFSC</h1>

</header>
<nav>
   
   <div>
     <a href="home.php">Home</a>
     <a href="sobre.php">Sobre</a>
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


<?php
    include_once "db.php";
    $users = recuperaAll();

    // Verifica se existem registros retornados
    if (!empty($users)) {
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>
                    Nome: {$user['nome']} <br> Email: {$user['login']} 
                    <button onclick=\"deleteUser({$user['id']})\">Excluir</button>
                    <button onclick=\"alterarUser({$user['id']})\">Alterar</button>
                </li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum usuário cadastrado.</p>";
    }
?>

<script>
    function deleteUser(id) {
        window.location.href = 'delete.php?id=' + id;
    }

    function alterarUser(id) {
        window.location.href = 'alterar.php?id=' + id;
    }
</script>

</body>
</html>
