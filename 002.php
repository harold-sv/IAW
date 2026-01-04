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
// Calculamos el total del carrito.
function calcularTotal($carrito) {
    $sumaTotal = 0;
    foreach ($carrito as $item) {
        $sumaTotal += $item['precio'] * $item['cantidad'];
    }
    return $sumaTotal;
}

// 2. Calculamos el total del carrito.
$totalSinDescuento = calcularTotal($carrito);
echo "<h3>Total sin descuento: $totalSinDescuento €</h3>";

?>