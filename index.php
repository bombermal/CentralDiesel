<!DOCTYPE HTML>
<html>
<head>
<?php require_once('Class/head.php'); ?>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php"><img src="images/DSC_04553.png" alt=""/></a>
  </div>
  <h2 class="form-heading">Login</h2>
  <div class="app-cam">
	  <form method="post" action="Class/valida.php">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
			<input type="text" name="login" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
			<input type="password" name="senha" required>
		</div>
		<div class="submit">
			<input type="submit" name="entrar" value="Entrar">
		</div>
	</form>
  </div>
</body>
</html>