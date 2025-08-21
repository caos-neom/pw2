<?php

class pessoa {
    public $nome;
    public $idade;
    public function __contruct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibir() {
        echo "Meu nome é $this->nome e tenho $this->idade anos";
    }
}

$pessoa = new Pessoa ('joselito', 20);
$pessoa->exibir();

?>