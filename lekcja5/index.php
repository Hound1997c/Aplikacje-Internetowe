<?php session_start(); ?>
<!--?php session_start(); ?-->
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<meta charset='UTF-8' />
</head>
<body>
	<h1>Nasz System</h1>
	<?php
		if(isSet($_POST["wyloguj"])){
			$_SESSION['zalogowany'] = 0;
		}
		echo '<br>';
		if(isSet($_COOKIE["nazwa"])){
			echo $_COOKIE["nazwa"];
			echo "xd";
		}
		//echo "Zalogowano " . $zalogowany;
	?>
	<form name="formularz" action="logowanie.php" method="post">
	<fieldset>
		<legend>Personalia:</legend>
		<table>
			<tr>
				<td>Login</td>
				<td>
					<input type="text" name="login">
				</td>
			</tr>
			<tr>
				<td>Hasło</td>
				<td>
					<input type="password" name="haslo">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="zaloguj" name="zaloguj">
				</td>
			</tr>
		</table>
	</fieldset>
	</form>
	<form name="cookieform" action="cookie.php" method="get">
		<input type="number" name="czas"></input>
		<input type="submit" name="utworzCookie"></input>
	</form>
		<a href="http://localhost/user.php">user</a>
</body>
</html>