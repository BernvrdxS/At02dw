<!DOCTYPE html>
<?php

$PCppt = rand (1,3);

$Userppt = isset ($_POST["PPT"]) ? $_POST["PPT"] : "";
$UserSelect = isset ($_POST["PPT"]) ? $_POST["PPT"] : "";



?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php include "menu.php";?>
<form action="" method="post">
    <input type="submit" value="Escolha sua jogada: "><br>
    <input type="radio" name="PPT" value= "1">Pedra<br>
    <input type="radio" name="PPT" value= "2">Papel<br>
    <input type="radio" name="PPT" value= "3">Tesoura<br>
</form>
    <?php
    echo "A jogada que o PC escolheu foi: ";
    echo $PCppt;     
    echo "<img src='img/PedraPapelTesoura/$PCppt.png ' alt=''>";
    echo "A escolha que o usuário escolheu foi: ";
    echo $Userppt;
    echo "<img src='img/PedraPapelTesoura/$Userppt.png ' alt=''>";
    
    if (($PCppt == 1) and ($Userppt == 3)) {
        echo "Quem ganhou foi o PC pois escolheu papel: ";
        echo $PCppt;
        echo "<img src='img/vencedor/$PCppt.png ' alt=''>";
     }

    elseif(($PCppt == 2) and ($Userppt == 1)) {
        echo "Quem ganhou foi o PC pois escolheu tesoura: ";
        echo $PCppt;
        echo "<img src='img/vencedor/$PCppt.png ' alt=''>";
     }
     elseif(($PCppt == 3) and ($Userppt == 2)) {
        echo "Quem ganhou foi o PC pois escolheu pedra: ";
        echo $PCppt;
        echo "<img src='img/vencedor/$PCppt.png ' alt=''>";
     }
     elseif(($Userppt == 1) and ($PCppt == 3)) {
        echo "Quem ganhou foi o usuário pois escolheu papel: ";
        echo $Userppt;
        echo "<img src='img/vencedor/$Userppt.png ' alt=''>";
     }
     elseif(($Userppt == 2) and ($PCppt == 1)) {
        echo "Quem ganhou foi o usuário pois escolheu tesoura: ";
        echo $Userppt;
        echo "<img src='img/vencedor/$Userppt.png ' alt=''>";
     }
     elseif(($Userppt == 3) and ($PCppt == 2)) {
        echo "Quem ganhou foi o usuário pois escolheu pedra: ";
        echo $Userppt;
        echo "<img src='img/vencedor/$Userppt.png ' alt=''>";
     }
     else
     echo "Empate, jogue novamente ";

    ?>
</body>
</html>