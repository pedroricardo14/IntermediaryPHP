<?php 

// Aula 01 - Programação Orientada a Objetos: POO

// Para iniciarmos, precisaremos entender alguns conceitos que envolvem
// POO, que para muitos pode ser algo difícil de compreender.
// Precisamos entender o que é classe e o que é objeto:
// Classe é tudo aquilo dentro da programação que pode ser generalizado,
// Já objeto é aquilo que há de específico dentro de programação.
// Para você entender melhor, vou exemplificar:

// Vamos dizer que você tem um carro,
// seu vizinho tem também um carro, porém de um modelo diferente
// do seu. Digamos que você é dono(a) de um Honda Civic e seu vizinho de um Ford.
// Perceba que os dois veículos são "carro", então vamos dizer que "carro" 
// é a classe geral do tipo "veículo". O seu carro, por ser diferente do
// carro do vizinho, é um objeto específico (isso também vale para o carro do seu vizinho).
// Percebeu? Classe é uma generalização de um objeto.

// Outro exemplo: Você é uma pessoa, você tem muitas características que te diferenciam de
// outras pessoas. Você é alguém específico da generalização "pessoa". Você, por ser diferente de
// outros, é como se você fosse um objeto, uma instância da classe "pessoa".

// Vamos à prática:

// Primeiro, vamos definir a classe (chamando class) com um nome aleatório que podemos escolher
// Nós somos livres para escolher o nome da classe.

class NomeDaClasse{
    // Perceba que quando eu criei essa classe, iniciei ela com letra maiúscula.
    // É recomendável que sempre que formos criar uma classe, deixemos a inícial maiúscula.
    // Por enquanto não vamos nos aprofundar no assunto de classes, pois isso é apenas uma
    // introdução.

    // Dentro de uma classe, temos alguns conceitos relacionados à classe.
    // Hoje trarei dois desses conceitos:

    // [1] Visibilidade: public, private e protected
    // Para entender sobre visibilidade, veja mais abaixo na numeração 1.
    // O public deixa a propriedade ou o método/função totalmente público

    // Propriedades:

    // Em PHP, uma propriedade é simplesmente uma variável declarada dentro da classe.
    // Por exemplo:
   public $propriedade = '';

    // Métodos:

    // Método é uma função declarada dentro da classe.
    // Assim:

    public function metodo(){
        // Quando vamos acessar uma variável/método dentro da própria classe, usamos a palavra
        // reservada "this"
        echo $this->propriedade;
    }

    // Apesar de propriedades serem variáveis e métodos serem funçães, precisamos
    // atribuir um grau de visibilidade [1], e para isso temos algumas palavras reservadas.
}

// Vamos ver agora como declarar um objeto (que é uma instância da classe)
// Primeiro, vamos declarar a variável que será nosso objeto e instanciá-la com
// a palavra "new" e o nome da classe com parênteses e ponto e vírgula no final. Assim:

$objeto = new NomeDaClasse();