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
  	       <h4>Cadastro de Peças</h4>
				<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Dados:</strong></label>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-5">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">Valor(R$):</label>
									<div class="col-sm-2">
										<div class="input-group">
											<input type="text" class="form-control1">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Referência:</label>
									<div class="col-sm-6">
										<input type="tel" class="form-control1 col-sm-3" id="focusedinput">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">Quantidade:</label>
									<div class="col-sm-1">
										<input type="text" class="form-control1" id="focusedinput">
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Tipo:</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio" name="gender" value="caixa" checked> Caixa<br></div>
										<div class="radio-inline"><label><input type="radio" name="gender" value="unidade"> Unidade<br></div>
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





