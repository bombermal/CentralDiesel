<?php
/**
 * Armazena o cliente na tabela.
 * 
 * 1 - verificar erro da Session msg;
 */
include_once 'link.php';

$id = $_POST['id'];
$id_dono = $_POST['proprietario'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$info = $_POST['info'];

$sql = "UPDATE carros 
		SET  id_dono = '".$id_dono."', marca = '".$marca."', modelo = '".$modelo."', placa = '".$placa."', info = '".$info."', reg_date = NOW() WHERE id = ".$id;

if ($conn->query($sql) === TRUE) {
	$msg = "Carro atualizado com sucesso.";
	$_SESSION['msg'] = $msg;
	header("location: ../buscaCliente.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>