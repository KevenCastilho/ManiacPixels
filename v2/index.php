<html> 
<head>
<title>.:. Maniac Pixel's .:.</title>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 0);
define('s_page',true);
include('./includes/config.inc.php');

//  $bg = array('bg_04.png' ); // array of filenames
//
//  $i = rand(0, count($bg)-1); // generate random number size of the array
//  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<style type="text/css">

body{
background-image:url('style/images/bgsnes.jpg'); 
  -webkit-background-size: 100% 100%;
  -moz-background-size: 100% 100%;
  -o-background-size: 100% 100%;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-attachment:fixed;
}

</style>
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">       
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen"/>     
<link rel="stylesheet" href="style/fancy.css" type="text/css" media="screen"/>     
<link type="text/css" href="style/ui-darkness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
<link rel="shortcut icon" href="./style/images/favicon.ico"/>   
<script>
var SV_NAME = "<?php echo SV_NAME; ?>";
var TITLE_SEPARATOR = "<?php echo TITLE_SEPARATOR; ?>";
</script>
<script type="text/javascript" src="js/jQuery.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryModer.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryFuncs.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryLogin.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryRegSt.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryConfg.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryNavL.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryFancy.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryRankg.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/jQueryUI.js" charset="UTF-8"></script>

    </head>

    <body>
        <ul id="nav">
            <li><a navid="Home">Home</a></li>
			<li><a navid="atari">Atari</a></li>
            <li><a navid="gb">GameBoy | GameBoy Color | GameBoy Advanced | Mega Drive | Master System | Nintendo | Sega Genesis</a></li>
        </ul>
                </br>  
        <div id="logo">MaNiAc PiXeLs</div>
        
        <div id="content">
            <div id="left">
                <div class="painel" id="status">
                    <h2> </h2>
                    <p>Status do Servidor: <span style="color:Green;">Online</span></p>
                </div>
                <div class="painel" id="login">
                                        <div class="center"> 
                      <p>Carregando...</p>
                    </div>
                </div>
            </div>
            
            <div id="center">
                <div class="painel">
               <script>
			   $(document).ready(function(){
			   $('#center .painel').LoadPage({'Link':'./pages/about.php','Title':'Home','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
			   })
			   </script>
                </div>
            </div>
        </div>
    </body> 
</html>