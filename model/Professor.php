<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professor
 *
 * @author PHP - MySQL
 */
class professor {
    private $id;
    private $numero_contribuinte;
    private $nome;
    private $nascimento;
    private $carga_horaria;
    private $especialidade_id;
    function getId() {
        return $this->id;
    }

    function getNumero_contribuinte() {
        return $this->numero_contribuinte;
    }

    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getCarga_horaria() {
        return $this->carga_horaria;
    }

    function getEspecialidade_id() {
        return $this->especialidade_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero_contribuinte($numero_contribuinte) {
        $this->numero_contribuinte = $numero_contribuinte;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setCarga_horaria($carga_horaria) {
        $this->carga_horaria = $carga_horaria;
    }

    function setEspecialidade_id($especialidade_id) {
        $this->especialidade_id = $especialidade_id;
    }


}
