<?php 

class Pessoa{
   
    public $nome = '';

    // Vamos começar criando os níveis de visibilidade como exemplo:
    // Vamos criar 3 variáveis simples só para ver como os níveis de visibilidade
    // funcionam.

    public $a = 'a';
    private $b = 'b';
    protected $c = 'c';


    // Vamos criar uma função para ler essas variáveis, pois elas só
    // podem ser lidas de dentro da própria classe:

    public function ler_b(){
        // lembarndo que para imprimir valores internos, precisamos usar o $this
        echo $this->b;
    }
    public function ler_c(){
        echo $this->c;
    }

    // Se executarmos o código assim, não vai acontecer nada, pois precisamos chamar
    // a função no outro arquivo que estamos usando. Iremos imprimir a variáveil de dentro
    // da classe.
    

    public function saudar(){
      
        echo 'Olá '.$this->nome.'<br/>';
       
    }
}