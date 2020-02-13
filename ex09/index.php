<html>

	<header>
		<title> Questao 09 </title>
	</header>
	<body>
	<?php
		$cont = 0;
		do{
			$sortt = rand(0,50);
			echo "$sortt <br>";
			$cont = $cont + 1;
		}while($sortt <> 37);

		echo "Apos $cont veze(s), foi sorteado o numero 37!!!"
	?>		
	</body>	
</html>