<html>

	<header>
		<title> Questao 10 </title>
	</header>
	<body>
	<?php
		$cont = 0;
		$soma = 0;
		do{
			$sortt = rand(0,100);
			$soma += $sortt;
			echo "$soma <br>";
			$cont = $cont + 1;
		}while($soma <= 1000);

		echo "Apos $cont veze(s), a soma passou de 1000!!!"
	?>		
	</body>	
</html>