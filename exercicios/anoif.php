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
			$a= isset($_GET["ano"])?$_GET["ano"]:1900;
			$i= date("Y") - $a;
		
			echo "Você nasceu em $a e tem $i anos. <br/>";
		
			if($i < 16){
				$tv="Não vota";
				$d="Não pode dirigir";
			}
			else{
				if($i >= (16 && $i < 18)|| $i>65){
					$tv="Voto Opcional";
					if($i > 18){
						$d="Já pode dirigir";
					}
					else{
						$d="Não pode dirigir";
					}
					
				}
				else{
					$tv="Voto Obrigatório";
					$d="Já pode dirigir";
				}
			}
			echo "Para essa idade  $tv e também $d.";
		
		
		
		?>
	
	</div>
</body>
</html>