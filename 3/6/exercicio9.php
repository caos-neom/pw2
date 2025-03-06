<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio3.php" metaphone="get">

<legend>exercicio 3</legend>
<label for="num1">informe um número</label>
<input type="num1" name="num1" id="num1" plaecholder ="0" required>
<label for="num2">informe um número</label>
<input type="num2" name="num2" id="num2" plaecholder ="0" required>
<label for="num3">informe um número</label>
<input type="num3" name="num3" id="num3" plaecholder ="0" required>
</form>

    <?php 

if (isset($_GET["num1"])){$num =$_GET["num1"];
    if (isset($_GET["num2"])){$num =$_GET["num2"];
        if (isset($_GET["num3"])){$num =$_GET["num3"];
if($num1 > $num2 > $num3){
    echo $num3,$num2,$num1;
}

else if ($num1 < $num2 < $num3){
    echo $num1,$num2,$num3;
}

else if ($num2 < $num1 < $num3){
    echo $num3,$num1,$num2;
}

else if ($num2 < $num3 < $num1){
    echo $num1,$num3,$num2;
}

else if ($num1 < $num3 < $num2){
    echo $num2,$num3,$num1;
}


else{
echo $num2,$num1,$num3 ;
}}}}
?>
</body>
</html>