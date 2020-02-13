<html>

	<header>
		<title> Questao 16  </title>
	</header>
	<body>
	<?php
		//http://localhost/lista02/ex16/?num=15
		
		$num = $_GET["num"];
		$aux = 0;
		echo "Tabuada do numero $num: <br><br>";
		for($cont = 1; $cont <= 10; $cont++){
			$aux = $cont * $num;
			echo "$cont   x   $num = $aux <br>";
		}
	?>		
	</body>	
</html>