

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio4.php" metaphone="get">

<legend>exercicio 4</legend>
<label for="num">informe um número</label>
<input type="num" name="num" id="num" plaecholder ="0" required>
</form>

    <?php 

$semestre1 = $_GET == "janeiro"."fevereiro"."março"."abril"."maio"."junho";
$semestre2 = $_GET == "julho"."agosto"."setembro"."outunro"."novembro"."dezembro";

if ($nome_GET == "A" || $nome_GET == "E" || $nome_GET == "I" || $nome_GET == "O" || $nome_GET == "U"){
    echo"vogal";}

else if ( $nome_GET == "B" || $nome_GET == "C" || $nome_GET == "D" || $nome_GET == "F" || $nome_GET == "G" || $nome_GET == "H" || $nome_GET == "J" || $nome_GET == "K" || $nome_GET == "L" $nome_GET == "M" || $nome_GET == "N" || $nome_GET == "P" || $nome_GET == "Q" || $nome_GET == "R" || $nome_GET == "S" || $nome_GET == "T" || $nome_GET == "V" || $nome_GET == "X" || $nome_GET == "Y" || $nome_GET == "Z"){
    echo"consoante";}

    else {
    echo"invalido";}
    

?>
</body>
</html>