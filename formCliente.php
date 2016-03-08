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
		<div class="graphs">
			<div class="xs">
  	       <h4>Cadastro de clientes</h4>
				<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Tipo:</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio" name="gender" value="male" checked> Jurídica<br></div>
										<div class="radio-inline"><label><input type="radio" name="gender" value="female"> Física<br></div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Dados:</strong></label>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telefone:</label>
									<div class="col-sm-3">
										<input type="tel" class="form-control1 col-sm-3" id="focusedinput">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">E-mail:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">CPF/CNPJ:</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input type="text" class="form-control1">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Endereço:</strong></label>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Rua:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Complemento:</label>
									<div class="col-sm-5">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">Bairro:</label>
									<div class="col-sm-2">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Número:</label>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">CEP:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Cidade:</label>
									<div class="col-sm-5">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">UF:</label>
									<div class="col-sm-2">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn-success btn">Salvar</button>
										<button class="btn-default btn">Cancelar</button>
										<button class="btn-inverse btn">Limpar</button>
									</div>
								</div>
							 </div>
							</form>
						</div>
				</div>
			</div>
		</div>
		</div>
		</div>
</div>	
</div>
</body>
</html>





