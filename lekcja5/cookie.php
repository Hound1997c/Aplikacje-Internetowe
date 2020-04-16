<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<meta charset='UTF-8' />
</head>
<body>
<?php
	echo $_GET["czas"];
	echo '<br>';
	setcookie("nazwa", "wartość", time() + $_GET["czas"],"/");
	if(isSet($_COOKIE["nazwa"])){
		echo $_COOKIE["nazwa"];
	}
?>
<br>
<a href="http://localhost/index.php">wstecz</a>
</body>
</html>