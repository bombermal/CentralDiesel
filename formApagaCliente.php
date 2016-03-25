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
			$sql = "SELECT * FROM clientes WHERE id =".$id;
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();?>
			
			
			<div class="xs">
			<h4>Cadastro de clientes</h4>
			<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
			<form class="form-horizontal" method="post" action="Class/updateCliente.php">
			<div class="form-group">
			<label for="radio" class="col-sm-2 control-label">Tipo:</label>
			<div class="col-sm-8">
			<div class="radio-inline"><input type="radio" name="tipo" value="1"  <?php if ($row['tipo'] == 1){echo "checked";} ?>> Jur&iacute;dica<br></div>
			<div class="radio-inline"><input type="radio" name="tipo" value="2" <?php if ($row['tipo'] == 2){echo "checked";} ?>> F&iacute;sica<br></div>
			</div>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label"><strong>Dados:</strong></label>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
			<div class="col-sm-9">
			<input type="text" class="form-control1" id="focusedinput" name="nome" value=<?php echo $row['nome'];?>>
			</div>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Telefone:</label>
			<div class="col-sm-3">
			<input type="tel" class="form-control1 col-sm-3" id="focusedinput" name="telefone" value=<?php echo $row['telefone'];?>>
			</div>
			<label for="focusedinput" class="col-sm-2 control-label">E-mail:</label>
			<div class="col-sm-4">
			<input type="text" class="form-control1" id="focusedinput" name="email" value=<?php echo $row['email'];?>>
			</div>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">CPF/CNPJ:</label>
			<div class="col-sm-6">
			<div class="input-group">
			<input type="text" class="form-control1" name="cpf" value=<?php echo $row['cpf'];?>>
			</div>
			</div>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label"><strong>Endere&ccedil;o:</strong></label>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Rua:</label>
			<div class="col-sm-9">
			<input type="text" class="form-control1" id="focusedinput" name="rua" value=<?php echo $row['rua'];?>>
			</div>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Complemento:</label>
			<div class="col-sm-5">
			<input type="text" class="form-control1" id="focusedinput" name="complemento" value=<?php echo $row['complemento'];?>>
			</div>
			<label for="focusedinput" class="col-sm-2 control-label">Bairro:</label>
			<div class="col-sm-2">
			<input type="text" class="form-control1" id="focusedinput" name="bairro" value=<?php echo $row['bairro'];?>>
			</div>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">N&uacute;mero:</label>
			<div class="col-sm-3">
			<input type="text" class="form-control1" id="focusedinput" name="numero" value=<?php echo $row['numero'];?>>
			</div>
			<label for="focusedinput" class="col-sm-2 control-label">CEP:</label>
			<div class="col-sm-4">
			<input type="text" class="form-control1" id="focusedinput" name="cep" value=<?php echo $row['cep'];?>>
			</div>
			</div>
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Cidade:</label>
			<div class="col-sm-5">
			<input type="text" class="form-control1" id="focusedinput" name="cidade" value=<?php echo $row['cidade'];?>>
			</div>
			<label for="focusedinput" class="col-sm-2 control-label">UF:</label>
			<div class="col-sm-2">
			<select class="form-control1" id="focusedinput" name='estado'>
			<optgroup>
			<option  value=<?php echo $row['uf'];?>><?php echo $row['uf'];?></option>
			<option value='RN'>RN</option>
			<option value='PE'>PE</option>
			<option value='PB'>PB</option>
			</optgroup>
			<optgroup label="------------">
			<option value='AC'>AC</option>
			<option value='AL'>AL</option>
			<option value='AP'>AP</option>
			<option value='AM'>AM</option>
			<option value='BA'>BA</option>
			<option value='CE'>CE</option>
			<option value='DF'>DF</option>
			<option value='GO'>GO</option>
			<option value='ES'>ES</option>
			<option value='MA'>MA</option>
			<option value='MT'>MT</option>
			<option value='MS'>MS</option>
			<option value='MG'>MG</option>
			<option value='PA'>PA</option>
			<option value='PR'>PR</option>
			<option value='PI'>PI</option>
			<option value='RJ'>RJ</option>
			<option value='RS'>RS</option>
			<option value='RO'>RO</option>
			<option value='RR'>RR</option>
			<option value='SP'>SP</option>
			<option value='SC'>SC</option>
			<option value='SE'>SE</option>
			<option value='TO'>TO</option>
			</optgroup>
			</select>
			</div>
			</div>
			<div class="panel-footer">
			<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
			<button class="btn-success btn" name="id" value=<?php echo $row['id'];?>>Salvar</button>
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
			$sql = "DELETE FROM clientes WHERE id = ".$id;
			if ($conn->query($sql) === TRUE) {
				$msg = "Cliente apagado com sucesso.";
				$_SESSION['msg'] = $msg;
				header("location: buscaCliente.php");
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		?>
		</div>
</div>
</body>
</html>





