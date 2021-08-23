<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
<title>Documento sem título</title>
</head>

<body>
	<div>
		<pre>
			<?php
				$n = array(3, 5, 8, 2);
				$n[]=7;
				print_r($n);
				$c = range(5, 20,2);
				foreach($c as $valor){
					echo "$valor ";
				}
					
			?>
		</pre>
	</div>
</body>
</html>