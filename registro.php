<?php
$p = $_POST['placa'];
$nome = $_POST['nome_completo'];
$RA = $_POST['registro_academico'];

$filename = "teste.txt";
if(!file_exists("teste.txt")){
    $placa = fopen("teste.txt", 'w');
} else {
    $placa = fopen("teste.txt", 'a');
}

fwrite($placa, "$nome\n");
fclose($placa);

?>
