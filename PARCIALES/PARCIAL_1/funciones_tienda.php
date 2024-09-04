<?php

function calcular_descuento($total_compra){

    $descuento = 0;

    if ($total_compra > 100){

        if ($total_compra < 500){

            $descuento = 5 % $total_compra;
        }

        if ($total_compra >= 501 && $total_compra <= 1000){

            $descuento = 10 % $total_compra;
        }

        if ($total_compra > 1000){

            $descuento = 15 % $total_compra;
        }

    }

}

function aplicar_impuesto($subtotal){
   
    $monto_impuesto = 7 % $subtotal;

    return $monto_impuesto ;

}

function calcular_total($subtotal, $descuento,$impuesto){

    $totalPagar = $subtotal - $descuento;
    $totalPagar = $totalPagar + $impuesto;
}






?> 
