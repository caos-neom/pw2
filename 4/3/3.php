<?php

$funcionarios = [
    
    'pessoa1' => [
        'Curso1' => [
            'curso' => 'Desenvolvimento de Sistemas',
        'Matéria1'=>['máteria' => 'Progamação Mobile',
        'Módulo I' => 'módulo I',
        'Módulo II' => 'Módulo II',
        ],
       'Matéria2'=> ['máteria' => 'Progamação web',
        'Módulo I' => 'módulo I',
         'Módulo II' =>'módulo II',
        'Módulo III' => 'módulo III',
        'Módulo IV' => 'módulo IV',
        ],
        'Matéria3'=>['' => 'Tecnicas de progamação e Algaritimos', 
        ],
        'Matéria4'=>['máteria' => 'ingles',
        'Módulo I' => 'módulo I',
       'Módulo II' =>'módulo II',
        'Módulo III' => 'módulo III',
        ],
    ],
    'Curso2' =>[
        'curso' => 'Administração',
        'Matéria5'=> ['máteria' => 'Recursos Humanos',
        'Módulo I' => 'módulo I',
        'Módulo II' => 'Módulo II',
    ],
        'Matéria6'=> ['máteria' => 'Gestão de pessoas',
],
       'Matéria7' =>[ 'máteria' => 'Teoria da administração',
    ],
        'Matéria8'=> [ 'matéria' =>'Inglês',
        'Módulo I' => 'módulo I',
    ],
    ],
],
];

foreach ($funcionarios as $key => $value) {
    echo "<br>curso:" . $value["curso"];
    echo "<br>matéria " . $value["máteria"];
  echo "<br>móduloI" . $value["móduloI"];
    echo "<br>moduloII" . $value["móduloII"];
    echo "<br>moduloIII " . $value["móduloIII"];
    echo "<br>móduloIV" . $value["móduloIV"];
};
?>