<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicio = $_POST['servicio'];
    $fecha_salida = $_POST['fecha_salida'];
    $fecha_regreso = $_POST['fecha_regreso'];
    $duracion = $_POST['duracion'];

    $to = 'marianotrasmontana@gmail.com';
    $subject = 'Nueva Consulta de Servicio';
    $message = "Servicio: $servicio\nFecha de Salida: $fecha_salida\nFecha de Regreso: $fecha_regreso\nDuración: $duracion";
    $headers = 'From: noreply@tu_dominio.com' . "\r\n" .
               'Reply-To: noreply@tu_dominio.com';

    mail($to, $subject, $message, $headers);
    echo 'Consulta enviada exitosamente.';
} else {
    echo 'Error en el envío de la consulta.';
}
?>