<?php
// Aula 4 - Propriedades
// Na aula de hoje vamos aprender sobre propriedades de uma forma mais aprofundada
// no PHP
class Pessoa{
   // Para começar, vamos por em prática o que vimos por último.
   // Por uma questão de segurança, vamos mudar a propriedade nome para privado
   // Para evitar que qualquer pessoa tenha acesso e possa modificar o nome.
    private $nome = '';

    // Com isso, só é possível alterar uma informação dentro da prórpia função
    // deixando a aplicação mais segura
 

    // Vamos criar duas funções, uma para ler o nome e outra para poder modificar

    // Ler o nome

    public function getNome() {
        return $this->nome;
    }

    // Alterar o nome
    public function setNome($novo_nome) {
        $this->nome = $novo_nome;
    }

    // Não há nenhuma regra que obrigue a usar get e set no nome da função
    // Nós podemos escolher o nome que quisermos.

    // Com isso, podemos alterar uma propriedade no tipo privada
    // (Se for protected vai funcionar do mesmo jeito)
 
}

// Obrigado por acompanhar e até a próxima ;)