<?php
session_start();
//$_SESSION["badIdOrName"]=0;
//$_SESSION["BadSql"]=0;
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
 if (!$link) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
 }
 print<<<KONIEC
	 <html>
	 <head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	 </head>
	 <body>
	 <form name="formpost" method="POST" action="form06_redirect.php">
	 id_prac <input type="text" name="id_prac">
	 nazwisko <input type="text" name="nazwisko">
	 <input type="submit" value="Wstaw" name="Wstaw">
	 <input type="reset" value="Wyczysc">
	 </form>
	 </body>
KONIEC;
//echo $_SESSION["BadSql"]."  ".$_SESSION["badIdOrName"]."<br>";
if($_SESSION["BadSql"]==1) {
	printf("nie dalo sie sql\n");
	$_SESSION["BadSql"]=0;
}
echo "<br>";
//else printf("sql\n");
if($_SESSION["badIdOrName"]==1){
	printf("zle id lub nazwisko\n");
	$_SESSION["badIdOrName"]=0;
}
//else printf("idzwisko\n");
?>