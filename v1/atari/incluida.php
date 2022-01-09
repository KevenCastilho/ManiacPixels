<?php error_reporting(0); ?>
<html>
<head>
<title>Post's</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php 
include "verifica.php";
//$data=date("d/m/Y");
$titulo=$_POST["titulo"]; //echo "$titulo";
$mensagem=$_POST["mensagem"];//echo "$mensagem";
$id_usuario=$_COOKIE["id"]; //echo "$id_usuario";
$conexao=mysql_connect("localhost","ragnarok","ragnarok");
mysql_select_db("noticias");
$sql="INSERT INTO noticias values";
$sql.="('null','$titulo','$mensagem',$id_usuario)";
$resultado=mysql_query($sql);
echo "Notícia Incluida com Sucesso!";
?>
<br>
<a href="./incluir_noticia.php">Voltar</a>
</body>
</html>
