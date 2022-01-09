<?php
if ( isset( $_POST['ajax'] ) ) {
    header( "Content-Type: text/html;  charset=ISO-8859-1", true );
    ?>
    <div class="center">
        <p>AVISO : Emuladores em fase Beta</p>
        <p>Alguns Bugs podem ser vistos no jogo.</p>
        <p>Melhor visualização do site em resolução 1366x768.</p>
        <p>Para executar os emuladores é necessario permitir o flash!</p>
        <p>Como estou sozinho neste projeto,ainda faltam muito conteudo a ser adicionado,caso tenha interesse em ajudar,me procure em uma das redes sociais.</p>
        <h2></h2>
        <p>Template feito por Keven Castilho</p>
        <p>Scripts feito por Keven Castilho</p>
        <p><!-- Seu Texto Aqui --></p>
        <script> $('div #center .center').append(SV_NAME+' &copy; <?php echo date( 'Y' ); ?> | Todos os Direitos Reservados'); </script>
    </div>
    <?php
} else {
    header( 'HTTP/1.0 404 Not Found' );
}
?>