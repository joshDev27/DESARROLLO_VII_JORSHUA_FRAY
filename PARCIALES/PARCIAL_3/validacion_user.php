<?php
function validarNombre($usuario) {
    // Comprobar que tenga al menos 3 caracteres y solo letras y números
    return preg_match('/^[a-zA-Z0-9]{3,}$/', $usuario);
}

function validarContrasena($password) {
    // Comprobar que la contraseña tenga al menos 5 caracteres
    return strlen($password) >= 5;
}

function validarPerfil($perfil) {
    return in_array($perfil, ['estudiante', 'profesor']);
}
?>