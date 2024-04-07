<?php 

// Aula 4 - Propriedades

require_once 'Pessoa2.php';

$pessoa1 = new Pessoa();
//$pessoa1->nome = 'José';


// Função para definir o nome de forma segura
$pessoa1->setNome('José');

// Se formos tentar mudar a informação (nome) por aqui, vai causar um erro fatal
// Isso deixa nossa aplicação bem mais segura.

// Aqui é para mostrar o nome
echo $pessoa1->getNome();


