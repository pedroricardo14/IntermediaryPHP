<?php 
// Aula 2 - Classes em PHP

// Na aula de hoje, vamos ver o básico sobre classes e objetos em PHP na prática
// Vamos criar a classe Pessoa (Lembre de defini-la com inicial maiúsicula) e definir o atributo "nome"(nome da pessoa)
// e vamos também criar um método para saudar o usuário sempre que a página
// carregar. Essa dica foi pensada para que você possa entender melhor os
// conceitos e não ter dúvidas.

// Essa aula está dividida em dois arquivos, Pessoa.php (Esse que você está
// vendo agora) e aula2-2.php, pois nós na maioria das vezes, vamos criar
// classes e objetos em arquivos/pastas separados/as. 
// O primeiro arquivo é esse (Pessoa.php, que é a criação da classe)

// Criando a classe:
class Pessoa{
    /*
    * Declara a classe Pessoa com uma descrição genérica de uma pessoa
    */

    // vamos criar uma "propriedade" para essa pessoa, que é o nome dela:
    public $nome = '';
    // Pense como na vida real, seu nome é público rsrsrs, alguém sabe seu nome

    // Criando um método:

    public function saudar(){
        // Lembrando que método é uma função...
        // Uma função que nesse caso também é pública.
        // Com o método criado, vamos mostrar na tela a saudação para o usuário.
        // Nesse caso, queremos mostrar o nome do usuário, para uma saudação mais
        // personalizada:
        echo 'Olá '.$this->nome.'<br/>';
        // Para acessar a propriedade "nome" da pessoa, vamos usar a palavra $this
        // com o apontamento para o nome da pessoa

        // Seguimos agora para a continuaçaõ, no arquivo aula2-2.php
    }
}