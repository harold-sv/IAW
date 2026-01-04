<?php
// CARRITO DE COMPRAS

// Array asociativo del producto.
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// 1. Mostramos el contenido del carrito con subtotal por producto.
foreach ($carrito as $item) {
    $subtotal = $item['precio'] * $item['cantidad'];
    
    echo "Producto: <p>{$item['producto']}</p> <br>";
    echo "Precio unitario: {$item['precio']}€ | Cantidad: {$item['cantidad']} <br>";
    echo "Subtotal: <p>$subtotal €</p> <hr>";
}
?>