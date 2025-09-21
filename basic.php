<?php
// Ejemplo básico en PHP

// Variables
$nombre = "Jhoan";
$edad = 22;
$activo = true;

// Condicional
# Comentario con hashtag
if ($edad >= 18) {
    echo "Hola, $nombre. Eres mayor de edad.<br>";
} else {
    echo "Hola, $nombre. Eres menor de edad.<br>";
}

// Bucle for
echo "Contando del 1 al 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// Array y foreach
$colores = ["Rojo", "Verde", "Azul"];
echo "Tus colores favoritos son:<br>";
foreach ($colores as $color) {
    echo "- $color<br>";
}

// Función
function saludar($persona) {
    return "¡Hola, " . $persona . "!";
}

echo saludar("Mundo");
?>
