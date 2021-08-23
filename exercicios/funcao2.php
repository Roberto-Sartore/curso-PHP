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
			echo " Passagem por valor<br/>";
			function teste($x){
				$x=$x+2;
				echo "O valor de X é $x";
			}
			
			$a=3;
			teste($a);
			echo "<br/> O valor de A é $a";
			echo "<br/><hr>";
			echo "Passagem por referencia<br/>";	
			function teste1(&$x){
				$x=$x+2;
				echo "O valor de X é $x";
			}
			
			$a=3;
			teste1($a);
			echo "<br/>O valor de A é $a";
		
		?>
	</div>
</body>
</html>