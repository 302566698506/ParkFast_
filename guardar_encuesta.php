<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valoracion = $_POST["valoracion"];
    $comentarios = $_POST["comentarios"];

    $resultado = "Valoración: $valoracion\nComentarios: $comentarios\n\n";

    // Guardar en un archivo TXT
    $archivo = "encuesta_resultados.txt";
    file_put_contents($archivo, $resultado, FILE_APPEND | LOCK_EX);
}
?>
