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
		/* Esse exercicio pretende demonstrar o uso
		de operadores de incremento e decremento. */
		$preco=$_GET["p"];# Essa linha vai pegar o preço na url.
		echo"O preço do produto é R$ ". number_format($preco, 2, ",", ".");
		$preco += ($preco*10)/100;
		echo"<br/> O novo preço com 10% de aumento é R$ ".number_format($preco, 2, ",", ".");
		$atual=$_GET["aa"];//Essa linha vai pegar o ano na url.
		echo"<br/> O ano atual é $atual e o ano anterior é ".--$atual;
		

		

		
		
	?>
	
	
	
	
	</div>
</body>
</html>