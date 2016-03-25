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
        <?php
		if (isset($_POST['editar'])){
			$id = $_POST['editar'];
			$sql = "SELECT * FROM carros WHERE id =".$id;
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();?>
			
			<div class="xs">
  	       <h4>Cadastro de ve&iacute;culos</h4>
				<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" action="Class/updateCarros.php">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Ve&iacute;culo:</strong></label>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Marca:</label>
									<div class="col-sm-3">
										<select class="form-control1" id="focusedinput" name="marca">
										  <optgroup label="">
										  	<option value=<?php echo $row['marca'];?>><?php echo $row['marca'];?></option>
										  </optgroup>
										  <optgroup label="-----------">
											  <option value="volvo">Volvo</option>
											  <option value="saab">Saab</option>
											  <option value="mercedes">Mercedes</option>
											  <option value="audi">Audi</option>
										  </optgroup>
										</select>
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">Modelo:</label>
									<div class="col-sm-4">
										<select class="form-control1" id="focusedinput" name="modelo">
										<optgroup>
											<option value=<?php echo $row['modelo'];?>><?php echo $row['modelo'];?></option>
										</optgroup>
										<optgroup label="-----------">
										  <option value="Hilux">Hilux</option>
										  <option value="S10">S10</option>
										</optgroup>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Placa:</label>
									<div class="col-sm-3">
										<input type="tel" class="form-control1 col-sm-3" id="focusedinput" name="placa" value=<?php echo $row['placa'];?>>
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">Ano:</label>
									<div class="col-sm-2">
										<div class="input-group">
											<input type="text" class="form-control1"  name="ano" value=<?php echo $row['ano'];?>>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Informa&ccedil;&otilde;es adicionais:</label>
									<div class="col-sm-9">
										<textarea class="form-control2" rows="5" name="info"><?php echo $row['info'];?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Propriet&aacute;rio:</strong></label>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Selecione:</label>
									<div class="col-sm-9">
										<select class="form-control1" id="focusedinput" name="proprietario">
										<optgroup label="">
										 	<option value=<?php echo $row['id_dono'];?>><?php echo $row['id_dono'];?></option>
										</optgroup>
										<optgroup label="---------" >
											<option>Joao</option>
											<option>Fernando</option>
										</optgroup>
										</select>
									</div>
								</div>
								<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn-success btn"  name="id" value=<?php echo $row['id'];?>>Salvar</button>
										<button class="btn-default btn">Cancelar</button>
										<button class="btn-inverse btn">Limpar</button>
									</div>
								</div>
							 </div>
							</form>
						</div>
				</div>
			</div>
			
			
		<?php 	
		} elseif (isset($_POST['apagar'])){
			$id = $_POST['apagar'];
			$sql = "DELETE FROM carros WHERE id = ".$id;
			if ($conn->query($sql) === TRUE) {
				$msg = "Carro apagado com sucesso.";
				$_SESSION['msg'] = $msg;
				header("location: buscaCarros.php");
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		?>
		</div>
</div>
</body>
</html>





