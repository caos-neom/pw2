<?php

$funcionarios = [
    'pessoa1' => [
        'nome' => 'Leo',
        'rm' => 'Arburia',
        'foto' => 'https://i.pinimg.com/236x/06/e2/aa/06e2aa3fa5e4f33439f9c57507b3e846.jpg',
        'telefone' => 'branco e preto',
        'peso' => ' ∞',
        'idade' => 'não sabes eres aliens',
    ],
    'pessoa2' => [
        'nome' => 'gaylherme',
        'rm' => 'humano',
        'foto' => 'https://pbs.twimg.com/media/GWAg2lSWAAAtDjf?format=jpg&name=large',
        'telefone' =>'sim',
        'peso' => '45kg',
        'idade' => '69',
    ],

    'pessoa3' => [
        'nome' => 'alequecander',
        'rm' => 'tirandosarro rex',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvP55atPeXiSmDCFZNux7zMvdujVoNSzRp5g&s',
        'telefone' =>'preto',
        'peso' => 'antes2,5t agora 58g',
        'idade' => '2bi',
    ],
    'pessoa4' => [
        'nome' => 'Neobas',
        'rm' => 'militar com miopia',
        'foto' => 'https://f.i.uol.com.br/fotografia/2017/08/26/706687-300x396-1.jpeg',
        'telefone' =>'camuflagem',
        'peso' => 'depende do q ta na mochila',
        'idade' => 'todas',
    ],
];

foreach ($funcionarios as $key => $value) {
    echo "<br>nome:" . $value["nome"];
    echo "<br>raça " . $value["rm"];
    echo "<img src ='" . $value["foto"] .  "' style='width: 300px;'>";
    echo "<br>cor " . $value["telefone"];
    echo "<br>peso " . $value["peso"];
    echo "<br>idade " . $value["idade"];
};
?>