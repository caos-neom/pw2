<?php

class aluno {
    public $nome;
    private $rm;

    public function setRM($value) {
        $this->rm = $value;
    }

    public function getRM() {
        return $this->rm;
    }
}

$aluno1 = new aluno();
$aluno1->nome = "ghertruides";
$aluno1->setRM(23432434);

echo "meu nome é $aluno1->nome <hr>";
echo "meu RM é " . $aluno1->getRM() . "<hr>";

?>