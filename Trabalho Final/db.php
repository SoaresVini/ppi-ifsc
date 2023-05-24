<?php

function conectaBD()
{
  $con = new PDO("mysql:host=localhost;dbname=web", "root", "aluno");
  return $con;


}

function insert($nome, $email, $senha)
{
  try {
    $con = conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (nome,login,senha) VALUES (?,?,?)";
    $stm = $con->prepare($sql);
    $stm->bindParam(1, $nome);
    $stm->bindParam(2, $email);
    $stm->bindParam(3, $senha);
    $stm->execute();
  } catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
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
    $return = $stm->fetchAll(PDO::FETCH_ASSOC);
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



}