<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author PHP - MySQL
 */
class Usuario{
    private $id;
    private $email;
    private $nome;
    private $password;
    
    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getNome() {
        return $this->nome;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPassword($password) {
        $this->password = $password;
    }


    
}
