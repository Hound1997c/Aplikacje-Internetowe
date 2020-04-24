<?php
 session_start();
 $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
 if (!$link) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
 }
 else{
	 printf("Connect \n");
 }
 if (isSet($_POST["Wstaw"]) && is_numeric($_POST['id_prac']) && is_string($_POST['nazwisko']))
 {
	 printf("yes form\n");
	 $_SESSION["badIdOrName"]=0;
	 //is_numeric($_POST['id_prac']) &&
 //is_string($_POST['nazwisko']))
 $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
 $stmt = $link->prepare($sql);
 $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
 $result = $stmt->execute();
 if (!$result) {
	 printf("Query failed: %s\n", mysqli_error($link));
	 $_SESSION["BadSql"]=1;
	 $stmt->close();
	 header("Location: form06_POST.php");
 }else{
	$stmt->close();
	header("Location: form06_GET.php");
	$_SESSION["BadSql"]=0;
 }
 
 }
 else{
	 printf("no form\n");
	 $_SESSION["badIdOrName"]=1;
	 echo $_SESSION["BadSql"]."  ".$_SESSION["badIdOrName"];
	 header("Location: form06_POST.php");
 }
?>