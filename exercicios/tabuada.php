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
			$n = isset($_GET["num"])?$_GET["num"]:1;
			echo "<h1> Mostrando a tabuada do $n </h1>";
			$c=1;
			do{
				echo "$n X   $c =  ".($n*$c)."<br/>";
				
				$c++;
			}while($c <=10);
		?>
		<a href="tabuada.html">Voltar</a>
	</div>
</body>
</html>