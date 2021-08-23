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
			function soma(){
				$p= func_get_args();
				$tot= func_num_args();
				$s= 0;
				for($i=0; $i<$tot; $i++){
					$s= $s+$p[$i];
				}
				return $s;
			}
			$r= soma(3, 5,2, 8,6 ,9);#pode ser colocado quantos elementos quiser.
			echo "A soma dos valores é $r";
		
		?>
	</div>
</body>
</html>