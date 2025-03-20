<?php

$estacionamento = [
    'fusca',
    'bicicleta',
    'ferrari'
];

foreach ($estacionamento as $key => $value) {
    echo 'veiculo ' . $key . '; ' . $value;
};

$patio = [
    [
        'nome' => 'fusca',
        'placa' => 'abc123',
        'foto' => 'https://http2.mlstatic.com/D_NQ_NP_894567-MLB75710133253_042024-O.webp'
    ],

    [
        'nome' => 'bicicleta',
        'placa' => 'hij456',
        'foto' =>'https://extra.globo.com/incoming/3516283-43b-b7a/w976h550-PROP/bicicleta-gigante-1.jpg'
    ],

    [
        'nome' => 'ferrari',
        'placa' => 'xyz789',
        'foto' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaSIhu9YToXaMrJ58Ppb9G5S7HVENUyaxgtg&s'
    ]
    ];

foreach ($patio as $key => $value) {
    echo "<br>veiculo:" . $value["nome"];
    echo "<br>placa " . $value["placa"];
echo "<img src ='" . $value["foto"] .  "' style='width: 300px;'>";
};

?>