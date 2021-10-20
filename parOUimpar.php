<!DOCTYPE html>
<?php

$parOUimpar = rand (0,10);

$UserNum = isset ($_POST["numeros"]) ? $_POST["numeros"] : 0;
$UserSelect = isset ($_POST["parImpar"]) ? $_POST["parImpar"] : "";

$PCNum = rand (0,10); 

$somaTotal = $UserNum + $PCNum

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>parOUimpar</title>
</head>
<body>
<?php include "menu.php";?>
<form action="" method="post">
    <select name="numeros">
        <option value=0>Zero</option>
        <option value=1>Um</option>
        <option value=2>Dois<option>
        <option value=3>Três</option>
        <option value=4>Quatro</option>
        <option value=5>Cinco</option>
        <option value=6>Seis</option>
        <option value=7>Sete</option>
        <option value=8>Oito</option>
        <option value=9>Nove</option>
        <option value=10>Dez</option>
    </select><br>
    <input type="submit" value="Escolher número"><br>
    <input type="radio" name="par" value= "parImpar">Par<br>
    <input type="radio" name="impar" value= "parImpar">Ímpar<br>
</form>
    <?php
    echo "O número que o PC escolheu foi: ";
    echo $PCNum;     
    echo "<img src='img/parOUimpar/$PCNum.jpg ' alt=''>";
    echo "O número que o usuário escolheu foi: ";
    echo $UserNum;
    echo "<img src='img/parOUimpar/$UserNum.jpg ' alt=''>";   
    ?>
<?php
    if ($somaTotal % 2 == 0) {
        echo "Quem escolheu par foi o vencedor, pois a soma total foi: ";
        echo $somaTotal; }

    elseif($somaTotal % 2 != 1) {
        echo "Quem escolheu ímpar foi o vencedor, pois a soma total foi: ";
        echo $somaTotal;

    }

?>
</body>
</html>
