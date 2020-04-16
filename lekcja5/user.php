<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<meta charset='UTF-8' />
</head>
<body>
	<?php
		if($_SESSION['zalogowany']!=1) header("Location: index.php");
		require_once("funkcje.php");
		//echo $_SESSION['zalogowany'];
		//echo "cześć";
		
		if(isSet($_POST["zaladujzdjecie"])){
			echo "post";
			$currentDir = getcwd();
			$uploadDirectory = "/zdjecia/";
			$fileName = $_FILES["filek"]['name'];
			$fileSize = $_FILES["filek"]['size'];
			$fileTmpName = $_FILES['filek']['tmp_name'];
			$fileType  = $_FILES['filek']['type'];
			if($fileName != "" and
				($fileType == 'image/png' or $fileType == 'image/jpeg'
				or $fileType == 'image/JPEG' or $fileType == 'image/PNG')
			){
				$uploadPath = $currentDir . $uploadDirectory . $fileName;
				if(move_uploaded_file($fileTmpName, $uploadPath)) {
					echo "zdjecie prawidlowo zaladowane";
					$src="/zdjecia/".$fileName;
					echo '<img src="'.$src.'"/>'; 
				}else echo "zdjecie lujowo zaladowane";
			}
			else echo "cos nie teges";
		}
	?>
	<form action='user.php' method='POST' enctype='multipart/form-data'>
		<input type=file name="filek">dodaj zdjecie</input>
		<input type=submit name="zaladujzdjecie" value="zaladuj" />
	</form>
	<!--a href="http://localhost/index.php">index</a-->
	<form action="http://localhost/index.php" method="Post">
		<input type="submit" value="wyloguj" name="wyloguj"> </input>
	</form>
	<img name alt="Italian Trulli">
</body>
</html>