<?php
/* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'offline';
header("Location: https://$host$uri/$extra");
exit;
?>