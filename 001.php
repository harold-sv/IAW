<?php
// Gestor de notas de Estudiantes:

// Creamos el array:
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];
// Función para calcular el promedio de notas:
foreach ($estudiantes as $nombre => $notas){
        function calcularPromedio($notas){
            $suma = array_sum($notas);   
            $totalNotas = count($notas); 
            return $suma / $totalNotas; 
        }
}

foreach ($estudiantes as $nombre => $notas) {
    $promedioActual = calcularPromedio($notas);
    
    // Comparamos el promedio:
    if ($promedioActual >= 6) {
        $estado = "<p>Aprobado</p>";
        $contadorAprobados++; 
    } else {
        $estado = "<p>Suspenso</p>";
        $contadorSuspendidos++; 
    }

}