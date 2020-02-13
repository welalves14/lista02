<html>

	<header>
		<title> Questao 07 </title>
	</header>
	<body>
	<?php
	$soma = 0;
		for($x=0;$x <= 100;$x++){
			if($x%2 != 0 ){
				$soma = $soma + $x;	
			}
		}
		echo "$soma<br>";	
	?>		
	</body>	
</html>