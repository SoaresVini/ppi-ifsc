<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  session_start();
  if (!isset($_SESSION['login'])) {
    header('location: login.html');
  }
  echo "Bem vindo $_SESSION[login]";
  ?>

  <ul>
    <li><a href="">Home</a></li>
    <li><a href="">Sobre</a></li>
    <li><a href="Logout.php">Logout</a></li>
  </ul>

</body>



</html>