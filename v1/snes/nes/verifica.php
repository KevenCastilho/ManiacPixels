<?php error_reporting(0); ?>
<?php  
$login=$_COOKIE["login"];
$senha=$_COOKIE["senha"];
$conexao=mysql_connect("localhost","ragnarok","ragnarok");
mysql_select_db("nes");
$sql="SELECT * FROM usuarios where login= '$login' and senha='$senha'";
$resultado=mysql_query($sql);
$row=mysql_num_rows($resultado);
if($row==0){ ?>
<script language="JavaScript">
window.location.href="login.php";
</script>
<?php } ?>




