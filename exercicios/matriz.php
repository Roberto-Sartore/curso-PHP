<!doctype html>
<html><head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
<title>Documento sem título</title>
</head>

<body>
	<div>
		<pre>
			<?php
				

				$m = array(array(6,4), array(4,9), array(3,2));
				$m[0] [1]=$m[2] [0];
				echo "O vetor tem". count($m)." elementos<br/>";
				print_r($m);
				
					
			?>
		</pre>
	</div>
</body>
</html>