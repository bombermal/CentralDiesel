<!DOCTYPE HTML>
<html>
<head>
<?php require_once('Class/head.php');

$login = $_SESSION['login'];?>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php require_once('Class/topBar.php'); ?>
        <div id="page-wrapper">
        <i class="fa fa-user fa-5x"></i>
        <?php 
		if(isset($nome)){
			echo "Perfil de ".$_SESSION['nome'];
		}
		include "Class/link.php";
		$sql = "SELECT * FROM usuarios WHERE login = '".$login."'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		?>
		<div class="panel-body no-padding">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>Dados do Usu&aacute;rio:</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>ID:</td>
								<td><?php echo $row["id"];?></td>
							</tr>
							<tr>
								<td>Nome:</td>
								<td><?php echo $row["nome"];?></td>
							</tr>
							<tr>
								<td>Login:</td>
								<td><?php echo $row["login"];?></td>
							</tr>
							<tr>
								<td>E-mail:</td>
								<td><?php echo $row["email"];?></td>
							</tr>
							<tr>
								<td>Tipo:</td>
								<td><?php if ($row["tipo"] == 1 ){
									echo "Administrador";
								} else if ($row["tipo"] == 2){
									echo "Usuário";
								} else{
								echo "Root";
								}?>
								</td>
							</tr>
							<tr>
								<td>Dia do registro::</td>
								<td><?php echo$row["reg_date"]; ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
</div>
</body>
</html>
