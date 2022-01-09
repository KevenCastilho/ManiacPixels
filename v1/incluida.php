<?php //error_reporting(0); ?>
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
$mensagem2=$_POST["mensagem2"];//echo "$mensagem";
$id_usuario=$_COOKIE["id"]; //echo "$id_usuario";
$conexao=mysql_connect("localhost","ragnarok","ragnarok");
mysql_select_db("nes");
$sql="INSERT INTO `nes`.`noticias` (`id_noticias`, `titulo`, `mensagem`, `emulador`, `url`, `mensagem2`, `url2`, `mensagem3`, `id_usuario`) VALUES ";
$sql.="(NULL, '[Aladdin] Dizzy the Adventurer (USA) (Unl)',NULL, NULL, NULL,'$mensagem2',NULL, NULL, NULL);)";
$resultado=mysql_query($sql);
echo "Notícia Incluida com Sucesso!";
?>
<br>
<a href="./incluir_noticia.php">Voltar</a>
</body>
</html>
