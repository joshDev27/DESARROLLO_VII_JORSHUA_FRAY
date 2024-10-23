<?php
function sanitizarUsuario($usuario ){
    return htmlspecialchars(trim($usuario), ENT_QUOTES, 'UTF-8');
}

function sanitizarContraseña($email) {
    return htmlspecialchars(trim($email), ENT_QUOTES, 'UTF-8');
}

?>
