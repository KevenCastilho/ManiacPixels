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
mysql_select_db("sega");
$sql="INSERT INTO `sega`.`noticias` (`id_noticias`, `titulo`, `mensagem`, `id_usuario`) values ('null','$titulo','$mensagem',$id_usuario);";
//$sql.="('null','$titulo','$mensagem2','$emulador','$url','$mensagem','$url2','$mensagem3',$id_usuario,)";
$resultado=mysql_query($sql);
if($resultado)
{
echo "ROM Incluida com Sucesso!";
}
else
{
echo mysql_errno($conexao) . ": " . mysql_error($conexao) . "\n";
}
?>
<br>
<a href="./incluir_noticia.php">Voltar</a>
</body>
</html>