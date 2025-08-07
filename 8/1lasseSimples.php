<?php

class pessoa {
    //op´çoes de encapsulamento
// public A variavel é acessível fora da classe
// private é acessivel somente dentro da classe
// protected é acessivel somente por herança
    public $nome;
    public $idade;

    public function apresentar(){
        echo "Olá o meu nome é $this->nome";
        echo "<hr>";
        echo "Tenho $this->idade anos";
        echo "<hr>";
    }
}

$aluno1 = new pessoa();
$aluno1->nome = 'cleberitos';
$aluno1->idade = 12;
$aluno1->apresentar();

$aluno2 = new pessoa();
$aluno2->nome = 'creusdete';
$aluno2->idade = 16;
$aluno2->apresentar();

?>