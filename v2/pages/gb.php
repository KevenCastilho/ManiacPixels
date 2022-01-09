<?php
if ( isset( $_POST['ajax'] ) ) {
    header( "Content-Type: text/html;  charset=ISO-8859-1", true );
    define( 's_page', true );
    include('../includes/config.inc.php');
    ?>
<object type="application/x-shockwave-flash" data="../emuladores/emulador/Nesbox.swf" width="570" height="480" id="emulator" style="visibility: visible;">
	<param name="allowscriptaccess" value="sameDomain">
	<param name="allowFullScreen" value="true">
	<param name="allowFullScreenInteractive" value="true">
</object>
    <?php
} else {
    header( 'HTTP/1.0 404 Not Found' );
}
?>