<?php
$conexion = mysqli_connect('localhost','root','','laboratorio') 
or die (mysql_error($mysqli));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $campo = $_POST["campo"];
    $valor = $_POST["valor"];

    $actualizar_registro = "UPDATE ingreso_personal SET $campo = '$valor' WHERE id = $id";

    mysqli_query($conexion, $actualizar_registro);
    echo "Se confirmo tu registro, por favor, vuelve a la pagina anterior";
    mysqli_close($conexion);
}
?>