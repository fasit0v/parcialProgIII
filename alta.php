<?php
$conexion = mysqli_connect('localhost','root','','laboratorio') 
or die (mysql_error($mysqli));

    alta_registro($conexion);

function alta_registro($conexion){
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $temperatura = $_POST['temperatura'];
    $tos = $_POST['tos'];
    $insuficiencia_respiratoria = $_POST['insuficiencia_respiratoria'];
    $dolor_garganta = $_POST['dolor_garganta'];
    $perdida_olfato = $_POST['perdida_olfato'];
    $perdida_gusto = $_POST['perdida_gusto'];
    $otros_sintomas = $_POST['otros_sintomas'];
    $contacto_aislamiento = $_POST['contacto_aislamiento'];
    $contacto_viajero = $_POST['contacto_viajero'];
    $viajes_lugar = $_POST['viajes_lugar'];
    $observaciones = $_POST['observaciones'];
    
    $alta = "INSERT INTO ingreso_personal (fecha, hora, nombre, apellidos, temperatura, tos, insuficiencia_respiratoria, " .
    "dolor_garganta, perdida_olfato, perdida_gusto, otros_sintomas, contacto_aislamiento, " .
    "contacto_viajero, viajes_lugar, observaciones) VALUES ('$fecha', '$hora', '$nombre', '$apellidos', $temperatura, '$tos', " .
    "'$insuficiencia_respiratoria', '$dolor_garganta', '$perdida_olfato', '$perdida_gusto', '$otros_sintomas', " .
    "'$contacto_aislamiento', '$contacto_viajero', '$viajes_lugar', '$observaciones')";
    mysqli_query($conexion, $alta);
    echo "Se confirmo tu registro, por favor, vuelve a la pagina anterior";
    mysqli_close($conexion);
}
?>