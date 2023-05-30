<?php
$conexion = mysqli_connect('localhost','root','','laboratorio') 
or die (mysql_error($mysqli));

   baja_registro($conexion);
// Función para realizar la baja de un registro
function baja_registro($conexion){
    $id = $_POST['id'];
    
    $baja = "DELETE FROM ingreso_personal WHERE id = $id";
    mysqli_query($conexion, $baja);
    echo "Se confirmo tu registro, por favor, vuelve a la pagina anterior";
    mysqli_close($conexion);
}
?>