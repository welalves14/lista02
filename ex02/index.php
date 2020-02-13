<html>

	<header>
		<title> Questao 02 </title>
	</header>
	<body>
	<?php
		$t = $_GET["total"];
		echo "total de vezes que voce quer $t <br><br>";
		for($x =0;$x < $t;$x++){
			echo "É possível repetir várias linhas no PHP. Esta linha foi repetida $x vezes<br><br>";
		}	
	?>		
	</body>	
</html>