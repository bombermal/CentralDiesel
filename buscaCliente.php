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
		<form class="form-horizontal" method="post" action="buscaCliente.php">
		<div class="form-group">
			<div>
				<label for="focusedinput" class="col-sm-1 control-label"><strong>Buscar cliente:</strong></label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control1" name="buscarCliente">
				<button class="btn-info btn col-sd-2" name="buscar">Buscar</button>
			</div>
		</div>
		</form>
		<div>
			<?php if (isset($_POST['buscar'])){
				$pesquisa = $_POST['buscarCliente'];
				if ($pesquisa != ''){
					$sql = "SELECT * FROM clientes WHERE id = '".$pesquisa."' OR nome LIKE '%".$pesquisa."%' OR cpf LIKE '%".$pesquisa."%' ORDER BY nome";
					$result = $conn->query($sql);
					?>
					<table class="table">
					      <thead>
					        <tr>
					          <th>ID</th>
					          <th>Pessoa</th>
					          <th>Nome</th>
					          <th>Telefone</th>
					          <th>E-mail</th>
					          <th>CPF/CNPJ</th>
					          <th>Rua</th>
					          <th>Complemento</th>
					          <th>N&uacute;mero</th>
					          <th>Bairro</th>
					          <th>CEP</th>
					          <th>Cidade</th>
					          <th>UF</th>
					          <th>Ultima modifica&ccedil;&atilde;o</th>
					          <th>Editar/Apagar</th>
					        </tr>
					      </thead>
					      <tbody>
					      <?php while($row = $result->fetch_assoc()) {?>
					        <tr class="active">
					          <td><?php echo $row['id'];?></td>
					          <td><?php if ($row['tipo'] == 1 ) {
					          			echo "Jur&iacute;dica";
					          			} else {
					          			echo "F&iacute;sica";}?></td>
					          <td><?php echo $row['nome'];?></td>
					          <td><?php echo $row['telefone'];?></td>
					          <td><?php echo $row['email'];?></td>
					          <td><?php echo $row['cpf'];?></td>
					          <td><?php echo $row['rua'];?></td>
					          <td><?php echo $row['complemento'];?></td>
					          <td><?php echo $row['numero'];?></td>
					          <td><?php echo $row['bairro'];?></td>
					          <td><?php echo $row['cep'];?></td>
					          <td><?php echo $row['cidade'];?></td>
					          <td><?php echo $row['uf'];?></td>
					          <td><?php echo $row['reg_date'];?></td>
					          <td>
					          	<form method="post" action="formApagaCliente.php">
					          		<button class="btn fa-lg btn-info" name="editar"  value="<?php echo $row['id'];?>" role="button">Editar</button>
					          		<br>
					          		<button class="btn fa-lg btn-danger" name="apagar" value="<?php echo $row['id'];?>" role="button">Apagar</button>
					          	</form>		
					          </td>
					        </tr>
					        <?php }
					}}?>
					      </tbody>
					    </table>
		
   		</div>
		</div>
		</div>
</body>
</html>
