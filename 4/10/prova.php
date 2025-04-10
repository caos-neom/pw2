<?php
$num = [14,33,6,8,3,28,12,8,-32,10];
$num2 = [];
$num3 =[];
foreach ($num as $key => $value) {
for ($i=0; $i <10 ; $i++) { 
      $num2 = $num[$key] * 10;
    
    }
echo ('o'.$num[$key] .'multiplacdo por 10 é'.$num2   );

for ($i=0; $i <10 ; $i++) { 
    $num3 = $num[$key] + $num[$key + 1];
  }
echo ('a soma dos números é'. $num3);
}


















?>