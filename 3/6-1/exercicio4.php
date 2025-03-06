

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

if ($nome_GET == "Janeiro"){
    echo"1 semestre";}

else if ($nome_GET == "Feveriro"){
    echo"1 semestre";}

    else if ($_GET ==  "março"){
    echo"1 semestre";}

    else if ($_GET ==  "arbil"){
    echo"1 semestre";}

    else if ($_GET ==  "maio"){
    echo"1 semestre";}

    else if ($_GET ==  "Junho"){
    echo"1 semestre";}

    else if ($_GET ==  "Junho"){
    echo"2 semestre";}
    
    else if ($_GET ==  "agosto"){
    echo"2 semestre";}

    else if ($_GET ==  "setembro"){
    echo"2 semestre";}

    else if ($_GET ==  "outubro"){
    echo"2 semestre";}

    else if ($_GET ==  "novembro"){
    echo"2 semestre";}

    else ($_GET ==  "dezembro"){
    echo"2 semestre";}
    

?>
</body>
</html>