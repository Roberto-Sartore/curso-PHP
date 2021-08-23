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
			$n=isset($_GET["num"])?$_GET["num"]:1;
			for($c=1; $c <= 10; $c++){
				$r=$n*$c;
				echo "$n X  $c =  $r<br/>";
			}
		?>
		<a href="tabuadafor.php">Voltar</a>
	</div>
</body>
</html>