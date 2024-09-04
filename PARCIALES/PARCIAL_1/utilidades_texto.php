<?php


function contar_palabras($cadena) {
    return str_word_count($cadena);
}

function invertir_palabras($cadena) {

    $palabras = explode(" ", $cadena);

    $palabrasInvertidas = array_map('strrev', $palabras);

    return implode(" ", $palabrasInvertidas);
}



function contarVocales($cadena) {

    $cadena = strtolower($cadena);
 
    $vocales = ['a', 'e', 'i', 'o', 'u','A', 'E', 'I', 'O', 'U'];
    $con = 0;

    for ($i = 0; $i < strlen($cadena); $i++) {
        if (in_array($cadena[$i], $vocales)) {
            $con++;
        }
    }
    
    return $con;
}













?>
