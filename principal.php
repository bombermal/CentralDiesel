<!DOCTYPE HTML>
<html>
<head>
<?php require_once('Class/head.php'); 
/**
 * Definir variaveis de Session usadas nessa página.
 * @var $nome	Recebe o nome do usuário vindo de $_SESSION['nome']
 * 
 * 1 - consertar erro de session inexistente.
 */

$nome = $_SESSION['nome']?>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php require_once('Class/topBar.php'); ?>
        <div id="page-wrapper">
        <?php 
		if(isset($nome)){
			echo "Bem vindo ".$nome;
			?>	
		<?php 
		} else {
			echo "no session";
		}
		?>
		</div>
</div>
</body>
</html>
