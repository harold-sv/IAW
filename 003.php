<?php

// cambiamos texto a (La poesía) y definimos la variable
$texto = "Oda al Elefante de la Web
Entre etiquetas de menor y mayor, nace un script con alma de servidor.
Con un signo de $ por bandera, guardas datos de cualquier manera.
<?php es tu grito de entrada, la señal de una web bien orquestada.
No importa si es un String o un Entero, tú procesas el código el mundo entero.
En el foreach bailan los estudiantes, en el carrito sumas los diamantes.
Con Apache y XAMPP como aliados, los errores de sintaxis son olvidados.
Aunque digan que el tiempo te ha pasado, sigues firme, robusto y bien plantado.
Porque si WordPress y la web aún resisten, es porque tus funciones aún existen. 
Terminas con ?> y cierras el telón, dejando un HTML en perfecta unión. PHP, mi fiel y viejo compañero, el lenguaje más noble y aventurero.";

// Quitamos puntos, comas, saltos de línea y retornos:
$textoLimpio = str_replace([",", ".", "\n", "\r"], "", $texto);
// 1. Convertimos todo a minúsculas
$textoMinusculas = strtolower($textoLimpio);

// Convertimos array a explode:
$todasLasPalabras = explode(" ", $textoMinusculas);

// 2. Total de palabras:
$totalPalabrasValidas = count($palabrasFiltradas);

// 3. Contar palabras repetidas:
$conteo = array_count_values($palabrasFiltradas);

// Inicializamos variables:
$palabraMasRepetida = "";
$maxVeces = 0;

echo "Total de palabras analizadas (de 3 o más letras): <p>$totalPalabrasValidas</p> <br><br>";

echo "<h3>Palabras que se repiten (más de 1 vez):</h3>";

foreach ($conteo as $palabra => $cantidad) {
    // 4. Mostramos solo si aparece más de una vez
    if ($cantidad > 1) {
        echo "<li>La palabra <strong>'$palabra'</strong> aparece $cantidad veces.</li>";
    }

    // 5. Encontramos palabra más repetida
    if ($cantidad > $maxVeces) {
        $maxVeces = $cantidad;
        $palabraMasRepetida = $palabra;
    }
}

?>