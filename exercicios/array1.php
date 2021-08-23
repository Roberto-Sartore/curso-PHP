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
				# chaves personalizadas
				$v = array(3=>5, 1=>9, 0=>8,7=>7);
				unset($v[0]);
				print_r($v);
				
					
			?>
		</pre>
	</div>
</body>
</html>