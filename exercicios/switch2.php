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
			$est = $_GET["est"];
			switch($est){
				case 1:
				case 3:
				case 4:
				case 14:
				case 22:
				case 23:
				case 27:
					echo "Você mora na <span class='foco'>Região Norte!</span>";
					break;
				case 2:
				case 5:
				case 6:
				case 10:
				case 15:
				case 17:
				case 18:
				case 20:
				case 26:
					echo "Você mora na <span class='foco'>Região Nordeste!</span>";
					break;
				case 9:
				case 12:
				case 13:
				case 7:
					echo "Você mora na <span class='foco'>Região Centro-Oeste!</span>";
					break;
				case 8:
				case 11:
				case 25:
				case 19:
					echo "Você mora na <span class='foco'>Região Sudeste!</span>";
					break;
				case 16:
				case 21:
				case 24:
					echo "Você mora na <span class='foco'>Região Sul!</span>";
														
			}
		?>
		<br/><a href="javascript:history.go(-1)" class"botao">Voltar</a>
	
	</div>
</body>
</html>