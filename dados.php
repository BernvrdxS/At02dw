<!DOCTYPE html>
<?php
$dados = rand(1,6);
$dadoUsuario1 = rand(1,6);
$dadoUsuario2= rand(1,6);
$somaUsuario = $dadoUsuario1 + $dadoUsuario2;
$dadoPC1 = rand (1,6);
$dadoPC2 = rand (1,6);
$somaPC = $dadoPC1 + $dadoPC2;

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados</title>
</head>
<body>
<?php include "menu.php";?>
<form action="" method="post">
    <input type="submit" value="Lançar Dados">
</form>
<?php
echo "<img src='img/dados/$dados.png' alt=''>";

    if ($somaPC > $somaUsuario) {
        echo "O PC ganhou! Sua soma foi maior ";
            echo $somaPC;
    }elseif ($somaUsuario > $somaPC) {
            echo "O usuário ganhou! Sua soma foi maior ";
            echo $somaUsuario;   
    }
?>
</body>
</html>
