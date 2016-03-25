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
		session_unset();
		session_destroy();
		header("location: index.php");
		?>
		
		</div>
</div>
</body>
</html>


