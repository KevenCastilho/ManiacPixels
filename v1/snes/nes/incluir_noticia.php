<?php //error_reporting(0); ?>
<html>
<head>
<title>Post's</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body ><center>
<?PHP
include "verifica.php";
 $nome=$_COOKIE["nome"];
 ?><form action="incluida.php" method="post">
  <table width="330" border="1">
    <tr> 
      <td colspan="2"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Bem 
        vindo, <?php echo "$nome"; ?></font></strong></td>
    </tr>
    <tr> 
      <td colspan="2"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Inclua 
        a sua Not&iacute;cia Aqui</font></strong></td>
    </tr>
    <tr> 
      <td width="96"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome</font></strong></td>
      <td width="218"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" name="titulo" size="45">
        </font></strong></td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">ROM:</font></strong></td>
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
		<input type="text" name="mensagem">
        </font></strong></td>
    </tr>
    <tr>
      <td><input type="submit" value="Incluir"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</center>
</body>
</html>
