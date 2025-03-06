<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio1.php" metaphone="get">

<legend>exercicio 1</legend>
<label for="num">informe um número</label>
<input type="num" name="num" id="num" plaecholder ="0" required>
</form>

    <?php 

if (isset($_GET["num"])){$num =$_GET["num"];
if($num > 7){
    echo"passou";
}

else if ($num == 6 || $num == 7){
    echo"recuperação";
}

else{
echo"reprovado";
}}
?>
</body>
</html>