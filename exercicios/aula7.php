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
		
		$n1=$_GET["a"];
		$n2=$_GET["b"];
		$tipo=$_GET["op"];
		echo "Os valores passados foram $n1 e $n2 <br/>";
		$r=($tipo == "s")?$n1+$n2:$n1*$n2;
		echo "O resultado será $r <br/>";
		$c=3;
		$d="3";
		$resp=$c===$d?"Sim":"Não";
		echo "As variaveis C e D são identicas? $resp<br/>";
		$nota1=$_GET["n1"];
		$nota2=$_GET["n2"];
		$m=($nota1+$nota2)/2;
		echo "A média entre $nota1 e $nota2 é $m <br/> ";
		$sit=$m>=6?"Aprovado":"Reprovado";
		echo "A situação do aluno é $sit";
		
		
		
		
		
		?>
	
	
	
	
	</div>
</body>
</html>