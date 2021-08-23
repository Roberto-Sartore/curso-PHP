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
			$n=$_GET["num"];
			$div=0;
			for($c=1; $c<=$n; $c++){
				if($n%$c == 0){
									
					$div++;
				}
								
			}
			if($div==2){
					echo " É primo!";
				}
				else{
					echo "Não é primo";
					
				}
				
		?>
		<a href="primo.html">Voltar</a>
	</div>
</body>
</html>