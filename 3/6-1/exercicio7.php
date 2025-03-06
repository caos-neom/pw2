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
<label for="num">informe um número</label>
<input type="num" name="num" id="num" plaecholder ="0" required>
</form>

    <?php 
 $n = 2025 - $num
if (isset($_GET["num"])){$num =$_GET["num"];
if($n > 17){
    echo"é maior de idade";
}

else{
echo"é menor de idade";
}}
?>
</body>
</html>