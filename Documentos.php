<?php 
// Vamos declarar os documentos:
class Documentos {

    // Protected ou públic funciona de boa, mas no private só é visível
    // dentro da própria classe.
    protected $mascara = '000.000.000-00';
    protected $cpf = '';
    
    // A função get para mostrar o número do documento:
    public function getCpf() {
        return $this->cpf;
    }

    // A função set para pegar o número do documento dentro do index:
  //  public function setCpf($cpf){
        // Esse cpf que está dentro do parênteses do set é diferente
        // do outro cpf que está lá em cima, abaixo da classe.
        // Precisamos fazer com que o cpf do set receba aquele que está lá em cima.
   //     $this->cpf = $cpf;
        // Segue agora para a classe Pessoa3
  //  }

  // Siga-me no Github: pedroricardo14
  // Obrigado por acompanhar e até a próxima ;)
}
