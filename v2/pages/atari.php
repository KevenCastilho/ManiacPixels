<?php
if ( isset( $_POST['ajax'] ) ) {
    header( "Content-Type: text/html;  charset=ISO-8859-1", true );
    define( 's_page', true );
    include('../includes/config.inc.php');
    ?>
<iframe src="../emuladores/emulador/javatari/" style="padding:0px;margin:0px;position:relative;left:25px;top:0px;width:508px;height:535px;border:0px;"></iframe>
    <?php
} else {
    header( 'HTTP/1.0 404 Not Found' );
}
?>