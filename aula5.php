<?php 

// Aula 5 - Herança em PHP
// Para a aula de hoje também vamos usar o arquivo Pessoa3.php e Documentos.php
// Herança é um conceito muito importante em Orientação a Objetos
// Nos princípios de orientação a objetos, herança são as características
// de alguma classe. Ela pode herdar dados/características de uma outra classe

// Primeiro, vamos importar o arquivo Pessoa3.php

require_once 'Pessoa3.php';

$pessoa1 = new Pessoa();
$pessoa1->setNome('José');
//echo $pessoa1->getNome();
$pessoa1->setCpf('000.111.222-33');
echo $pessoa1->getCpf();