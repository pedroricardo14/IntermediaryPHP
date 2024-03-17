<?php
// Aula 3 - Visibilidade no PHP
// Na aula de hoje vamos aprender de forma mais aprofundada sobre visibilidade.
// Vamos começar importando o arquivo Pessoa1.php 
// Dessa vez, ao invés de usarmos o inclide, vamos usar o require_once para
// evitar problemas.
// Só relembrando, essa aula é sobre public, private e protected 


require_once 'Pessoa1.php';

$pessoa1 = new Pessoa();
$pessoa1->nome = 'José';

// Vamos começar tentando acessar as propriedades do arquivo Pessoa1.php
// que estão com níveus de visibilidade:

echo $pessoa1->a;
//echo $pessoa1->b;
//echo $pessoa1->c;

// Ao você testar, pode perceber que mostrou a variável "a" normalmente, mas
// as variáveis b e c não foram exibidas ou deram erro. Isso acontece pois essas
// variáveis não podem ser acessadas, pois, como o nome já diz, elas não são públicas.
// Essas variáveis só podem ser acessadas dentro da própria classe. Nós não conseguimos
// acessar ou alterar essas variáveis fora da classe. Pode-se alterar a propriedade pública
// estando fora da classe, mas a privada e a protegida, não.

$pessoa1->ler_b();
$pessoa1->ler_c();

// Essas variáveis não podem ser lidar de fora, mas podem se lidas de dentro do método, mas
// se esse método for protegido/privado, não conseguiremos acessar.
// Só acessamso se for dentro da classe.

// Por enquanto, vamos imaginar que private e protected são a mesma coisa, para facilitar.
// Mais pra frente vamos ver conceitos mais avançados que nos ajudarão a distinguir uma da outra.
