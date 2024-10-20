<?php

require_once 'aula6.php';

$pessoa1 = new Pessoa();
// pessoa1->nome = 'Jose';

$pessoa1->setNome('José');
$pessoa1->setCpf('111.222.333-44');

echo '<br>Nome: '. $pessoa1->getNome.'<br>CPF: '.$pessoa1->getCpf();
