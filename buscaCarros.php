<!DOCTYPE HTML>
<html>
<head>
<?php require_once('Class/head.php'); ?>
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
        <?php require_once('Class/topBar.php'); ?>
        <div id="page-wrapper">
		<form class="form-horizontal" method="post" action="buscaCarros.php">
		<div class="form-group">
			<div>
				<label for="focusedinput" class="col-sm-1 control-label"><strong>Buscar carros:</strong></label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control1" name="buscarCarros">
				<button class="btn-info btn col-sd-2" name="buscar">Buscar</button>
			</div>
		</div>
		</form>
		<div>
			<?php if (isset($_POST['buscar'])){
				$pesquisa = $_POST['buscarCarros'];
				$sql = "SELECT * FROM carros WHERE id_dono = '".$pesquisa."' OR id = '".$pesquisa."' OR placa LIKE '%".$pesquisa."%' OR modelo LIKE '%".$pesquisa."%' ORDER BY marca";
				$result = $conn->query($sql);
					?>
					<table class="table">
					      <thead>
					        <tr>
					          <th>ID</th>
					          <th>Marca</th>
					          <th>Modelo</th>
					          <th>Placa</th>
					          <th>Ano</th>
					          <th>Informações<br>adicionais</th>
					          <th>Proprietário</th>
					          <th>Ultima modifica&ccedil;&atilde;o</th>
					          <th>Editar/Apagar</th>
					        </tr>
					      </thead>
					      <tbody>
					      <?php while($row = $result->fetch_assoc()) {?>
					        <tr class="active">
					          <td><?php echo $row['id'];?></td>
					          <td><?php echo $row['marca'];?></td>
					          <td><?php echo $row['modelo'];?></td>
					          <td><?php echo $row['placa'];?></td>
					          <td><?php echo $row['ano'];?></td>
					          <td><?php echo $row['info'];?></td>
					          <td><?php echo $row['id_dono'];?></td>
					          <td><?php echo $row['reg_date'];?></td>
					          <td>
					          <form method="post" action="formApagaCarros.php">
					          		<button class="btn fa-lg btn-info" name="editar"  value="<?php echo $row['id'];?>" role="button">Editar</button>
					          		<br>
					          		<button class="btn fa-lg btn-danger" name="apagar" value="<?php echo $row['id'];?>" role="button">Apagar</button>
					          	</form>	
					         </td>
					         </tr>
					        <?php }
					}?>
					      </tbody>
					    </table>
		
   		</div>
		</div>
</div>
</body>
</html>
