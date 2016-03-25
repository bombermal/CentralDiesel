<!DOCTYPE HTML>
<html>
<head>
<?php require_once('Class/head.php'); ?>
</head>
<body id="login">
  <div >
    <a href="index.php"><img src="images/DSC_04553.png"/></a>
  </div>
  <div>
  	<h2>Login</h2>
  </div>
  <div class="col-md-9">
	  	<form method="post" action="Class/valida.php">
		<div class="input-group">
			<span class="input-group-addon">
				<i>Login:</i>
			</span>
			<input class="bg-success" type="text" name="login" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon">
				<i>Senha:</i>
			</span>
			<input class="bg-warning" type="password" name="senha" required>
		</div>
		<div class="submit">
			<input type="submit" name="entrar" value="Entrar">
		</div>
		</form>
  </div>
</body>
</html>