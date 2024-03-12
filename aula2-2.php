<?php
// Para esse exemplo funcionar na sua máquina, você precisa definir esse
// arquivo como index, ok?

// Primeiro de tudo, vamos importar a classe Pessoa.php para cá com o include
include 'Pessoa.php';

// Vamos criar o objeto Pessoa, deixando-o na variável pessoa1
$pessoa1 = new Pessoa();

//echo $pessoa1->nome;

// Agora, vamos dizer ao programa como é o nome do usuário, que irá 
// aparecer na tela:

$pessoa1->nome = 'José';

// Esse código quer dizer que a variável em que está armazenado o objeto
// Pessoa vai receber a propriedade nome como José

//echo $pessoa1->nome;

// Por fim, vamos saudar o usuário José:

$pessoa1->saudar();

// O mesmo se repete pra quantos usuários quisermos no nosso sistema:

$pessoa2 = new Pessoa();
$pessoa2->nome = 'Maria';
$pessoa2->saudar();

// Isso é tudo, obrigado por acompanhar e até a próxima!!!