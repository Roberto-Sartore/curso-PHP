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
			$d = isset($_GET["ds"])?$_GET["ds"]:0;
			switch($d){
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo "Levanta é dia de semana! :(";
					break;
				case 7:
				case 8:
					echo "Descanse e bom fim de semana :)";
					break;
				default:
					echo "Dia da semana Invalido!";
										
			}
		?>
		<br/><a href="javascript:history.go(-1)" class"botao">Voltar</a>
	</div>
</body>
</html>