<?php
// CARRITO DE COMPRAS

// Array asociativo del producto.
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// Título.
echo "<h2>Factura</h2>";

// 1. Mostramos el contenido del carrito con subtotal por producto.
foreach ($carrito as $item) {
    $subtotal = $item['precio'] * $item['cantidad'];
    
    echo "Producto: <p>{$item['producto']}</p> ";
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

// 3. Aplicamos el descuento (10% si < 1000€/5% si < 500€).
$descuentoPorcentaje = 0;

if ($totalSinDescuento > 1000) {
    $descuentoPorcentaje = 10; // 10%
} elseif ($totalSinDescuento > 500) {
    $descuentoPorcentaje = 5;  // 5%
}

$montoDescuento = ($totalSinDescuento * $descuentoPorcentaje) / 100;
$totalFinal = $totalSinDescuento - $montoDescuento;

// Resultados finales.
echo "<h3>Resumen de la Factura:</h3>";
echo "Total bruto: " . number_format($totalSinDescuento, 2) . "€ <br>";
echo "Descuento aplicado: $descuentoPorcentaje% (-" . number_format($montoDescuento, 2) . "€) <br>";
echo "<p>Total a pagar: " . number_format($totalFinal, 2) . "€</p>";

?>