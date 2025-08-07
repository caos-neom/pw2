<?php
//classe pai

class pessoa {
    public $nome;
    public $tipo;

    public function mostrarTipo() {
        echo "Essa pessoa é do tipo $this->tipo <hr>";
    }
} 

class PessoaComum extends pessoa{
    public $cpf;
}

class Empresa extends pessoa{
    public $cnpj;
}

$pessoa = new PessoaComum();
$pessoa->nome = 'hutyrio';
$pessoa->tipo = 'fisica';

$empresa = new Empresa();
$empresa->nome = 'hutyrio moveis';
$empresa->tipo = 'juridica';

$pessoa->mostrarTipo();
$empresa->mostrarTipo()

?>