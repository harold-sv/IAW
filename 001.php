<?php

// 1. Array estudiantes:
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "Maria" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

// 2. Función para calcular el promedio:
function calcularPromedio($notas) {
    $suma = array_sum($notas);   
    $cantidad = count($notas);   
    return $suma / $cantidad;    
}


// 3. Recorremos el array de estudiantes para calcular promedios y estados:
foreach ($estudiantes as $nombre => $notas) {
    
    // función para obtener el promedio del estudiante actual
    $promedio = calcularPromedio($notas);
    
    // 4. Verificamos es estado del estudiante (Aprobado/Suspenso)
    if ($promedio >= 6) {
        $estado = "Aprobado";
        $aprobados++; // Aumentamos el contador de aprobados
    } else {
        $estado = "Suspenso";
        $suspendidos++; // Aumentamos el contador de suspendidos
    }

    
}

?>