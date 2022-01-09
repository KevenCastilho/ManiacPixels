<?php error_reporting(0);
include "script.php";
 ?>
<html>
<head>
<title>Post's</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php 
$id_noticias=$_GET["id_noticias"];// echo "$id_noticias";

$conexao=mysql_connect("localhost","ragnarok","ragnarok");
mysql_select_db("nes");
$sql="SELECT * FROM noticias where id_noticias='$id_noticias'";
$resultado=mysql_query($sql); 
$pegar=mysql_fetch_array($resultado);
echo "$pt1$pt2$pt3$pegar[mensagem]$pt4";
/*
echo $pt1;
echo $pt2;
echo $pt3;
echo "$pegar[mensagem]";
echo $pt4;*/
?>
<br>
<a href="index.php">Voltar</a>
</body>
</html>
