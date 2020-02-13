<html>

	<header>
		<title> Questao 15 </title>
	</header>
	<body>
	
	<table border="1">	
		<?php
		$max = $_GET["total"];
		
		for($lin = 1;$lin <= $max; $lin ++){
			echo "<tr>";
			for($col = 1;$col <= $max; $col ++){
				echo "<td>Linha $lin - Coluna $col</td>";
			}
			echo "</tr>";
		}
		?>
	</table>

	</body>	
</html>
