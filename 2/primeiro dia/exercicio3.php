<?php

// uma linha

#umalinha

/*
multiplas linhas
*/

//crie um script que no qual contem uma variavel com a idade e exiba se a pesso é criança adolecente adulto ou idoso

$id = -6 ;

if ($id >= 60) {
    echo "idoso";
}

elseif ($id >= 18 && $id <60) {
    echo "adulto" ;
}

elseif ($id >= 12 && $id < 18) {
    echo "adolecente";
}

elseif ($id >= 0 && $id < 12) {
    echo "criança";
}

else {
    echo "como?";
}
?>