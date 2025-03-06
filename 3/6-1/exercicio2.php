<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio2.php" metaphone="get">

<legend>exercicio 2</legend>
<label for="num">sua idade</label>
<input type="num" name="num" id="num" plaecholder ="0" required>
</form>

    <?php 

if (isset($_GET["num"])){$num =$_GET["num"];
if($num > 17 && $num <70){
    echo"deve votar";
}

else if ($num  < 16 ){
    echo"não vota";
}

else{
echo"voto opicional";
}}
?>
</body>
</html>