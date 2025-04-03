<!-- exercicio 1 -->
<?php

$funcionarios = [
    'pessoa1' => [
        'nome' => 'Leo',
        'rm' => 'não tem eres burro',
        'foto' => 'https://i.pinimg.com/236x/06/e2/aa/06e2aa3fa5e4f33439f9c57507b3e846.jpg',
        'telefone' => 'sinal de fumaça'
    ],
    'pessoa2' => [
        'nome' => 'gaylherme',
        'rm' => '54869546749867495674598675498670',
        'foto' => 'https://pbs.twimg.com/media/GWAg2lSWAAAtDjf?format=jpg&name=large',
        'telefone' =>'pompo correio'
    ],

    'pessoa3' => [
        'nome' => 'alequecander',
        'rm' => 'sim',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvP55atPeXiSmDCFZNux7zMvdujVoNSzRp5g&s',
        'telefone' =>'não tem',
    ],
    'pessoa4' => [
        'nome' => 'Neobas',
        'rm' => 'todos',
        'foto' => 'https://f.i.uol.com.br/fotografia/2017/08/26/706687-300x396-1.jpeg',
        'telefone' =>'8002 8922',
    ],
];

foreach ($funcionarios as $key => $value) {
    echo "<br>nome:" . $value["nome"];
    echo "<br>rm " . $value["rm"];
    echo "<img src ='" . $value["foto"] .  "' style='width: 300px;'>";
    echo "<br>telefone " . $value["telefone"];
};








?>