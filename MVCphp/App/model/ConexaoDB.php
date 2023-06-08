<?php

namespace App\model;

class Conexao {
    private static $instance;

    public static function getConn() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new \PDO('mysql:host=localhost;dbname=web', 'root', '1981');
            } catch (\PDOException $e) {
                // Exibe um alerta na tela
                echo '<script>alert("Erro ao conectar ao banco de dados!");</script>';
                exit; // Termina a execução do script
            }
        }

        return self::$instance;
    }
}

?>