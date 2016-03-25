<!-- Título da barra -->
<nav class="top1 navbar navbar-inverse navbar-static-top"" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">   
		<a class="navbar-brand" href="principal.php"><h2>Central Diesel</h2></a>
	</div>
	<!-- Menu de usuário -->
	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
			<ul class="dropdown-menu">
				<li class="m_2"><a href="perfil.php"><i class="fa fa-user"></i> Perfil</a></li>
				<li class="m_2"><a href="logout.php"><i class="fa fa-sign-out"></i> Sair</a></li>	
			</ul>
		</li>
	</ul>
	<!-- Barra lateral esquerda -->
	<?php require_once('leftBar.php'); ?>  
</nav>