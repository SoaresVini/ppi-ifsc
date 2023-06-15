<?php

function conectaBD()
{
  $con = new PDO("mysql:host=localhost;dbname=web", "root", "1981");
  return $con;


}

function atualizaUser($id, $nome, $email, $telefone, $dataNasc)
{
  try {
    $con = conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE user SET nome=?, login=?, telefone=?, dataNasc=? WHERE id=?";
    $stm = $con->prepare($sql);
    $stm->bindParam(1, $nome);
    $stm->bindParam(2, $email);
    $stm->bindParam(3, $id);
    $stm->bindParam(4, $telefone);
    $stm->bindParam(5, $dataNasc);
    $stm->execute();
  } catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
}

function insert($nome, $email, $senha, $telefone, $dataNasc)
{
  try {
    $con = conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (login,nome,senha,telefone,dataNasc) VALUES (?,?,?,?,?)";
    $stm = $con->prepare($sql);
    $stm->bindParam(1, $email);
    $stm->bindParam(2, $nome);
    $stm->bindParam(3, $senha);
    $stm->bindParam(4, $telefone);
    $stm->bindParam(5, $dataNasc);
    $stm->execute();
  } catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
}

  function deletaUser($id)
  {
    $con = conectaBD();
    $sql = "DELETE FROM user WHERE id=?";
    try {
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stm = $con->prepare($sql);
      $stm->bindParam(1, $id);
      $stm->execute();
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
  }

  function recuperaUser($id)
  {
      $con = conectaBD();
      $sql = "SELECT * FROM user WHERE id=?";
      $stm = $con->prepare($sql);
      $stm->bindParam(1, $id);
      $stm->execute();
      $return = $stm->fetch(PDO::FETCH_ASSOC);
      return $return;
  }
  
  function recuperaAll()
  {
    $con = conectaBD();
    $sql = "SELECT * FROM user";
    $stm = $con->prepare($sql);
    $stm->execute();
    $return = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $return;
  }

 
  function verificaLoginSenha($login, $senha)
  {
    $con = conectaBD();
    $sql = "SELECT * FROM user WHERE login = :login AND senha = :senha";
    $stm = $con->prepare($sql);
    $stm->bindParam(':login', $login);
    $stm->bindParam(':senha', $senha);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);

    // Verificando se a consulta retornou algum resultado
    if (!empty($result)) {
        return true;
    } else {
        return false;
    }
  }

?>