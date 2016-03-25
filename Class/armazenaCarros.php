<?php
/**
 * Armazena o cliente na tabela.
 * 
 * 1 - verificar erro da Session msg;
 */
include_once 'link.php';

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$info = $_POST['info'];
//$proprietario = $_POST['proprietario'];
$proprietario = 4;

$sql = "INSERT INTO carros( id_dono, marca, modelo, placa, ano, info, reg_date) 
VALUES ( '".$proprietario."', '".$marca."', '".$modelo."', '".$placa."', '".$ano."', '".$info."', NOW())";

if ($conn->query($sql) === TRUE) {
	$msg = "Carro cadastrado com sucesso.";
	$_SESSION['msg'] = $msg;
	header("location: ../buscaCarros.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>