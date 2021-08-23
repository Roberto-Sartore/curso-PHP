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
			$v = isset($_GET["val"])?$_GET["val"]:1;
			echo "<h1> Calculando o Fatorial de $v </h1>";
			$c= $v;
			$fat = 1;
			do{
				$fat = $fat * $c;
				$c--;
			}while($c >= 1);
			echo "<h2> $v ! = $fat </h2>";
		
		?>
		<a href="formulario06.html">Voltar</a>
	</div>
</body>
</html>