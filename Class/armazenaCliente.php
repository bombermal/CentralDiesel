<?php
/**
 * Armazena o cliente na tabela.
 * 
 * 1 - verificar erro da Session msg;
 */
include_once 'link.php';

$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO clientes( tipo, nome, telefone, email, cpf, rua, complemento, numero, bairro, cep, cidade, uf, reg_date) 
VALUES ( '".$tipo."', '".$nome."', '".$telefone."', '".$email."', '".$cpf."', '".$rua."', '".$complemento."', '".$numero."', '".$bairro."', '".$cep."', '".$cidade."', '".$estado."', NOW())";

if ($conn->query($sql) === TRUE) {
	$msg = "Cliente cadastrado com sucesso.";
	$_SESSION['msg'] = $msg;
	header("location: ../buscaCliente.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>