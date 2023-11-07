<?php
$nome = $_POST['nomePrato'];
$peso = $_POST['peso'];
if (!empty($_POST['nomePrato']) && isset($_POST['nomePrato']) &&
!empty($_POST['peso']) && isset($_POST['peso'])) {
$valor = ($peso/1000)*21.50;

echo"Prato: $nome - Peso: $peso gramas - Valor a pagar R$ $valor - Dividido por 2 Pessoas custara R$". ($valor/2);
} else {
    echo "Preencha os dados";
    header("refresh:1, form.php");
}