<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Guardar en JSON (simple)
    $datos = [
        'nombre_niño' => htmlspecialchars($_POST['nombre_niño']),
        'edad' => intval($_POST['edad']),
        'nombre_padre' => htmlspecialchars($_POST['nombre_padre']),
        'email' => htmlspecialchars($_POST['email']),
        'telefono' => htmlspecialchars($_POST['telefono']),
        'actividad_interes' => htmlspecialchars($_POST['actividad_interes']),
        'mensaje' => htmlspecialchars($_POST['mensaje']),
        'fecha' => date('Y-m-d H:i:s')
    ];
    
    // Guardar en archivo JSON
    $inscripciones = [];
    if (file_exists('inscripciones.json')) {
        $inscripciones = json_decode(file_get_contents('inscripciones.json'), true);
    }
    
    $inscripciones[] = $datos;
    file_put_contents('inscripciones.json', json_encode($inscripciones, JSON_PRETTY_PRINT));
    
    // Mensaje de éxito
    echo "<h1>¡Solicitud Enviada! ✅</h1>";
    echo "<p>Nos contactaremos contigo en 24 horas</p>";
    echo '<a href="ladybug.php">Volver al inicio</a>';
}
?>