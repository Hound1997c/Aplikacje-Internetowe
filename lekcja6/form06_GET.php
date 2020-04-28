<?php
	session_start();
	
	//echo "<a href="form06_POST.php">Dodanie nowego</a>";
/* printf<<<LINK
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		
	</body>
	</html>
LINK; */

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
	<?php
		$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
		if (!$link) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		echo "<br><br>";
		if($_SESSION["dodano"]==1){
			printf("dodano nowego pracownika");
			$_SESSION["dodano"]=0;
			echo "<br><br>";
		}
		$sql = "SELECT * FROM pracownicy";
		$result = $link->query($sql);
		foreach ($result as $v) {
			echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
		}
		$result->free();
		$link->close();
	?>
		<a href="form06_POST.php">Dodanie nowego</a>
	</body>
</html>