<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
<title>Documento sem título</title>
</head>

<body>
	<div>
		<form method="get" action="tabuadafor2.php">
			Número:
			<select name="num">
				<?php
					for($c=1; $c <= 10; $c++){
						echo "<option>$c</option>";
					}
				?>
				
			</select>
			<input type="submit" class="botao" value="Tabuada"/>
		</form>
	</div>
</body>
</html>