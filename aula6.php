<?php
// Aula 6 - Private vs Protected

require_once 'Documentos.php';

Class pessoa extends Documentos {
    /*
    * Declara a classe pessoa com uma descrição genérica de uma pessoa
    */

    protected $nome = '';

    // ler o nome
    public function getNome() {
        return $this->nome;
    }

    // alterar nome 
    public function setNome($novo_nome){
        $this->nome = $novo_nome;
        echo 'Descreva o CPF da seguinte forma: '.$this->mascara;
    }
}
