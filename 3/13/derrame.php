<?php


  $array = [5,0,15,0,-25,-30,-7,0,9,13];

  $contador1 = 0;
  $contador2 = 0;

  foreach ($array as $key => $value) {
    if($value != 0){
        $contador1++;
    }if($value == 0){
        $contador2++;
    }
  }
  
  echo "Existem " . $contador2 . " Números iguais a zero <br>";
  echo "Existem " . $contador1 . " Números diferentes de zero <br>";
  
?>
