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
							<form class="form-horizontal" method="post" action="Class/armazenaCliente.php">
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Tipo:</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio" name="tipo" value="1"  checked> Jur&iacute;dica<br></div>
										<div class="radio-inline"><label><input type="radio" name="tipo" value="2"> F&iacute;sica<br></div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Dados:</strong></label>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control1" id="focusedinput" name="nome">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telefone:</label>
									<div class="col-sm-3">
										<input type="tel" class="form-control1 col-sm-3" id="focusedinput" name="telefone">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">E-mail:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control1" id="focusedinput" name="email">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">CPF/CNPJ:</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input type="text" class="form-control1" name="cpf">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"><strong>Endereço:</strong></label>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Rua:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control1" id="focusedinput" name="rua">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Complemento:</label>
									<div class="col-sm-5">
										<input type="text" class="form-control1" id="focusedinput" name="complemento">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">Bairro:</label>
									<div class="col-sm-2">
										<input type="text" class="form-control1" id="focusedinput" name="bairro">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Número:</label>
									<div class="col-sm-3">
										<input type="text" class="form-control1" id="focusedinput" name="numero">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">CEP:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control1" id="focusedinput" name="cep">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Cidade:</label>
									<div class="col-sm-5">
										<input type="text" class="form-control1" id="focusedinput" name="cidade">
									</div>
									<label for="focusedinput" class="col-sm-2 control-label">UF:</label>
									<div class="col-sm-2">
										<select class="form-control1" id="focusedinput" name='estado'>
							                <optgroup>
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





