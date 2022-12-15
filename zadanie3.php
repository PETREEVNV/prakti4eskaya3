<?php
	$cols = rand(1,10); //td
	$rows = rand(1,10); //tr
	?>
<!DOCTYPE html>

<html>
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Таблица умножения</h1>
	
	<?php

	echo "<table border='1'>";
	for($r=1;$r<=$rows;$r++){
		echo "<tr>";
		for($c=1, $color='CornflowerBlue', $align='center', $weight='bold';$c<=$cols;$c++){
			echo "<td bgcolor=$color align=$align style=font-weight:$weight>".$r*$c."</td>";
			if($r>1){$color='white'; $align='right'; $weight='normal';}
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>