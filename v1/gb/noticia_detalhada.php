<?php error_reporting(0);
include "script.php";
 ?>
<html><head>
<title>Maniac Pixel's</title>
<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript">
function myHref()
{
var infoOver = "mAnIaC pIxElS"
document.getElementById('info').innerHTML = infoOver
}
</script>
<script type="text/javascript">
function myHref2()
{
var infoOver = "IMPACT GAME'z All Right Reserved."
document.getElementById('info2').innerHTML = infoOver
}
</script>
</head>
<body>
<div class="logo"><a href="#" id="info" onMouseOver="javascript:myHref()">MaNiAc PiXeLs<br></a></div><!---
<img src="bg.menu.png1" style="width:1225px;height:70px;position:fixed;top:105px;left:63px;"/> --->
<div id="navcontainer">
	<ul class="menu">
		<li><a href="">Home</a></li>
		<li><a href="">Atari</a></li>
		<li><a href="">Sega Genesis</a></li>
		<li><a href="">Nintendo</a></li>
		<li><a href="">Super Nintendo</a></li>
		<li><a href="">Nintendo 64</a></li>
		<li><a href="">Game Boy</a></li>
		<li><a href="">Game Boy Color</a></li>
		<li><a href="">Game Boy Advanced</a></li>
		<li><a href="">MAME</a></li>
	</ul>
</div>
<br><br><br><br><br>
<br><br><br>
<br>
<img id="tv" src="../img/tv.png" />
<?php 
$id_noticias=$_GET["id_noticias"];// echo "$id_noticias";

$conexao=mysql_connect("localhost","ragnarok","ragnarok");
mysql_select_db("gb");
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
<div id="back"><a href="index.php"><font face="Verdana">Ｖｏｌｔａｒ</font></a></div>
<div id="footer"><a href="#" id="info2" onMouseOver="javascript:myHref2()"><?php echo "Copyright © ". date('m/y') ?></a></div>
</body>
</html>
