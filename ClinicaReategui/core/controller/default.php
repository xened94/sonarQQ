<?
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "es_CO.utf8");
date_default_timezone_set('America/Bogota');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Bienvenido a<? print $host; ?>! Hostinger Hosting Web con PHP y MySQL.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="http://www.main-hosting.com/hostinger/welcome/css/site.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
    <div id="content">
        <div class="header">
            <a id="logo" href="http://www.hostinger.co/"><img src="http://www.hostinger.co/images/logo-co.png" alt="Hosting Web" /></a>
        </div>
        <div class="content">
            <h1>Tu cuenta ha sido creada!</h1>
            <p>El sitio <b><? print $host; ?></b> ha sido correctamente instalado en el servidor! Por favor elimina el archivo <b>default.php</b> de la carpeta <b>public_html</b> y después carga tu sitio usando un cliente FTP o el Administrador de Archivos.</p>
            <div class="clear"></div>
        </div>
        <div class="footer"></div>
        <div class="clear"></div>
    </div>
    <div id="footer">
        <div class="links">
            <a href="http://www.hostinger.co/hosting-web" target="_blank">Hosting Web</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.co/hosting-gratis" target="_blank">Hosting Gratis</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.co/forum" target="_blank">Foro de Soporte</a>
            <span class="pipe">|</span>
            <a href="http://cpanel.hostinger.co/" target="_blank">Iniciar Sesión</a>
        </div>
        <div class="copyright">Hostinger Colombia &copy; <? print date('Y'); ?>. Todos los derechos reservados.</div>
        <div class="social-icons">
            <a href="http://www.facebook.com/Hostinger.co"><img src="http://www.main-hosting.com/hostinger/welcome/images/fb.gif" /></a>
            <a href="https://twitter.com/HostingerCom"><img src="http://www.main-hosting.com/hostinger/welcome/images/twitter.gif" /></a>
        </div>
    </div>
</div>
</body>
</html>