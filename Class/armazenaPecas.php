<?php
/**
 * Armazena o cliente na tabela.
 * 
 * 1 - verificar erro da Session msg;
 */
include_once 'link.php';

$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$referencia = $_POST['referencia'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO pecas( tipo, nome, valor, referencia, quantidade, reg_date) 
VALUES ( '".$tipo."', '".$nome."', '".$valor."', '".$referencia."', '".$quantidade."', NOW())";

if ($conn->query($sql) === TRUE) {
	$msg = "PPeça cadastrada com sucesso.";
	$_SESSION['msg'] = $msg;
	header("location: ../buscaPecas.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>