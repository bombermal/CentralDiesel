<?php
/**
 * Armazena o cliente na tabela.
 * 
 * 1 - verificar erro da Session msg;
 */
include_once 'link.php';

$id = $_POST['id'];
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

$sql = "UPDATE clientes 
		SET  tipo = '".$tipo."', nome = '".$nome."', telefone = '".$telefone."', email = '".$email."', cpf = '".$cpf."', rua = '".$rua."', complemento = '".$complemento."',
		numero = '".$numero."', bairro = '".$bairro."', cep = '".$cep."', cidade =  '".$cidade."', uf = '".$estado."', reg_date = NOW() WHERE id = ".$id;

if ($conn->query($sql) === TRUE) {
	$msg = "Cliente cadastrado com sucesso.";
	$_SESSION['msg'] = $msg;
	header("location: ../buscaCliente.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>