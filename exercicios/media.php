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
			$n1= isset($_GET["n1"])?$_GET["n1"]:0;
			$n2= isset($_GET["n2"])?$_GET["n2"]:0;
			$m= ($n1+$n2)/2;
			
			if($m >= 7){
				echo "A média é $m<br/>";
				echo "O aluno está APROVADO!";
			}
			elseif($m >=5 && $m<7){
				echo "A média é $m<br/>";
				echo "O aluno está em RECUPERAÇÃO!";	
			}
			else{
				echo "A média é $m<br/>";
				echo "O aluno está REPROVADO!";
			}
					
					
		?>
	
		
	
	
	</div>
</body>
</html>