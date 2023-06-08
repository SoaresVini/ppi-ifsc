<?php

namespace App\model;

class User {
    private $name;
    private $email;
    private $password;
    private $id;

    public function __construct($email,$name,$password) {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}



?>