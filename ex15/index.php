<html>

	<header>
		<title> Questao 15  </title>
	</header>
	<body>
	<?php
		$max = $_GET["total"];
		
		echo "</table border='1'>";

		for($lin = 0; $lin < $max; $lin++){
			echo "<tr>";
			for($col = 0; $col < $max; $col++){
				echo "<td> texto  </td>";
			}
			echo "</tr><br>";
		}
		echo "</table>";
	?>		
	</body>	
</html>