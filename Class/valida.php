<?php	
/**
 * Classe respon�vel pela valida��o do usu�rio.
 * 
 * 1 - Colocar a mascara na senha
 * 2 - Colocar um session para indicar erro de senha.
 */
include_once "link.php";

/**
 * Recebe o valor do login e senha via POST
 * 
 * @var $login	login do usu�rio
 * @var $senha	senha do usu�rio
 */
$login = $_POST['login'];
$senha_encrypt = (isset($_POST['senha'])) ? $_POST['senha'] : '';
$senha = md5($senha_encrypt);

/**
 * Executa a liga��o com o servidor e verifica login e senha.
 * 
 * @var $sql 	Contem a chamada da query
 * @var $result	Conecta ao banco usando $sql
 */
$sql = "SELECT * FROM usuarios WHERE login = '".$login."' AND senha = '".$senha."' LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $senha;
//while($row = $result->fetch_assoc()) {
//	echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " - Login: " . $row["login"]. " - Senha: ". $row['senha']. "<br>";
//}

/**
 * Se h� apenas um usu�rio com os dados informados segue para a pagina princpal, caso contr�rio
 * retorna para index.
 */
if ($result->num_rows == 1){
	session_start();
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['nome'] = $row["nome"];
	header("location: ../principal.php");
} else {
	session_unset();
	session_destroy();
	header("location: ../index.php");
}
?>
