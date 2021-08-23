<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
<title>Documento sem título</title>
</head>

<body>
	<div>
		<?php 
		$nome=isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
		$ano=isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo=isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
		$idade=date("Y")-$ano;
		echo "$nome é $sexo e tem $idade anos.";
		
				
		?>
		<a href="formulario01.html">Voltar</a>
	
	</div>
</body>
</html>