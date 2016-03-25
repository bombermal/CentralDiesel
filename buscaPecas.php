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
		<form class="form-horizontal" method="post" action="buscaPecas.php">
		<div class="form-group">
			<div>
				<label for="focusedinput" class="col-sm-1 control-label"><strong>Buscar Peças:</strong></label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control1" name="buscarPecas">
				<button class="btn-info btn col-sd-2" name="buscar">Buscar</button>
			</div>
		</div>
		</form>
		<div>
			<?php if (isset($_POST['buscar'])){
				$pesquisa = $_POST['buscarPecas'];
				$sql = "SELECT * FROM pecas WHERE id = '".$pesquisa."'";
				$result = $conn->query($sql);
					?>
					<table class="table">
					      <thead>
					        <tr>
					          <th>Nome</th>
					          <th>Valor</th>
					          <th>Referência</th>
					          <th>Quantidade</th>
					          <th>Tipo</th>
					          <th>Ultima modifica&ccedil;&atilde;o</th>
					          <th>Editar/Apagar</th>
					        </tr>
					      </thead>
					      <tbody>
					      <?php while($row = $result->fetch_assoc()) {?>
					        <tr class="active">
					          <td><?php echo $row['nome'];?></td>
					          <td><?php echo $row['valor'];?></td>
					          <td><?php echo $row['referencia'];?></td>
					          <td><?php echo $row['quantidade'];?></td>
					          <td><?php echo $row['tipo'];?></td>
					          <td>
					          	<form method="post" action="#">
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
