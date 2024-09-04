<?php



include 'funciones_tienda.php';


$productos=[ 'camisa'=> 50,
             'pantalon'=>70,
             'calcetines'=> 10,
             'gorra'=> 25];
 

$carrito=[  'camisa'=> 2,
            'pantalon'=>5,
            'calcetines'=> 4,
            'gorra'=> 10];




function procesarCompra($productos, $carrito) {
    $valorTotalCompra = 0;

    foreach ($productos as $producto => $precio) {
        if (isset($carrito[$producto])) {
            $cantidad = $carrito[$producto];
            $valorTotalCompra += $precio * $cantidad;
        }
    }

    return $valorTotalCompra;
}

$descuento = calcular_descuento(procesarCompra($productos, $carrito));
$impuesto = aplicar_impuesto($descuento);

?>






