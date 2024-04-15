<?php 

// Para que uma classe consiga herdar as características de outra classe,
// vamos alterar a declaração dela:

// class NomeDaClasse extends OutraClasse{}

// Para exemplificar, vamos supor que há uma pessoa, e essa pessoa
// possui vários documentos, como RG, CNH, Título de eleitor...
// e a pessoa é identificada pelo documento dela, o documento é
// um tipo de objeto, uma generalização que está vinculado com a pessoa


// Como estamos trabalhando com documento, vamos importar o arquivo
// Documentos.php
require_once 'Documentos.php';

// Conseguimos modificar/acessar os dados mesmo protegidos pois Pessoa está
// estendendo Documentos, está herdando. Está pegando tudo o que está em Docunentos
// e passando para cá. Não posso acessar diretamente do index mas posso acessar
// através dos método get e set
class Pessoa extends Documentos{
    
    // Quando uma classe herda a herança de outra classe. ela
    // pode acessar as propriedades protegidas
     private $nome = '';
 
     public function getNome() {
        
         return $this->nome;
     }
 
     // Alterar o nome
     public function setNome($novo_nome) {
         $this->nome = $novo_nome;
         echo 'Descreva o CPF da seguinte forma:' . $this->mascara;
     }
     
  
 }