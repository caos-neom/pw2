<?php

//

class forma{

    public function desenhar(){
        echo "desenha algo";
    }
}

class circulo extends forma {
    public function desenhar(){
        echo "desenha circulo";
    }
}

$figura = new Circulo();
$figura->desenhar();

?>