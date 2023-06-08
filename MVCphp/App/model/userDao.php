<?php

namespace App\model;

require_once 'App\model\ConexaoDB.php';

class userDao{

  function insert(User $u)
  {
    $sql = "INSERT INTO web.user (login, nome, senha) VALUES (?, ?, ?)";

    $con = Conexao::getConn();
    $stm = $con->prepare($sql);

    $email = $u->getEmail();
    $nome = $u->getName();
    $senha = $u->getPassword();

    $stm->bindParam(1, $email);
    $stm->bindParam(2, $nome);
    $stm->bindParam(3, $senha);

    $stm->execute();

}

function update(User $u)
{

  $sql = "UPDATE user SET nome=?, login=?, senha=? WHERE id=?";

  $con = Conexao::getConn();
  $stm = $con->prepare($sql);
  $email = $u->getEmail();
  $nome = $u->getName();
  $senha = $u->getPassword();
  $id = $u->getId();

  $stm->bindParam(1, $email);
  $stm->bindParam(2, $nome);
  $stm->bindParam(3, $senha);
  $stm->bindParam(4, $id);

  $stm->execute();
  
}

function delete($id)
{
  $sql = "DELETE FROM user WHERE id=?";

  $con = Conexao::getConn();
  $stm = $con->prepare($sql);

  $stm->bindParam(1, $id);

  $stm->execute();

}

function SelectUser($id)
  {
    $sql = "SELECT * FROM user WHERE id=?";

    $con = Conexao::getConn();
    $stm = $con->prepare($sql);
 
    $stm->bindParam(1, $id);

    $stm->execute();
    $return = $stm->fetchAll(\PDO::FETCH_ASSOC);
    return $return;
  }

  function SelectAll()
  {
    $sql = "SELECT * FROM user";
    $con = Conexao::getConn();
    $stm = $con->prepare($sql);
    $stm->execute();
    $return = $stm->fetchAll(\PDO::FETCH_ASSOC);
    return $return;
  }

 
  function verificaUser($login, $senha)
  {
    $sql = "SELECT * FROM user WHERE login = :login AND senha = :senha";
    $con = Conexao::getConn();
    $stm = $con->prepare($sql);


    $stm->bindParam(':login', $login);
    $stm->bindParam(':senha', $senha);

    $stm->execute();
    $result = $stm->fetchAll(\PDO::FETCH_ASSOC);

    // Verificando se a consulta retornou algum resultado
    if (!empty($result)) {
        return true;
    } else {
        return false;
    }
  }


}
?>