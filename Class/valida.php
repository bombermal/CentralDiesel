<?php	
/**
 * Classe responável pela validação do usuário.
 * 
 * 1 - Colocar a mascara na senha
 * 2 - Colocar um session para indicar erro de senha.
 */
include_once "link.php";

/**
 * Recebe o valor do login e senha via POST
 * 
 * @var $login	login do usuário
 * @var $senha	senha do usuário
 */
$login = $_POST['login'];
$senha_encrypt = (isset($_POST['senha'])) ? $_POST['senha'] : '';
$senha = md5($senha_encrypt);

/**
 * Executa a ligação com o servidor e verifica login e senha.
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
 * Se há apenas um usuário com os dados informados segue para a pagina princpal, caso contrário
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
