<html>

	<header>
		<title> Questao 08 </title>
	</header>
	<body>
	<?php
		$max = $_GET["total"];

		$soma = 0;

		for($x =0;$x < $max;$x++){
			$soma = $soma + $x;
			echo "$soma <br>";
		}	
	?>		
	</body>	
</html>