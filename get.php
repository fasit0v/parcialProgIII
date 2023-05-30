<?php
$conexion = mysqli_connect('localhost','root','','laboratorio') 
or die (mysql_error($mysqli));

$sql = "SELECT * FROM ingreso_personal";
$result = $conexion->query($sql);


if ($result->num_rows > 0) {

    echo "<table>";
    echo "<tr><th>ID</th><th>Fecha</th><th>Hora</th><th>Nombre</th><th>Apellido</th><th>Temperatura</th><th>Tos</th><th>Insuficiencia Respiratoria</th><th>Dolor de Garganta</th><th>Pérdida del Olfato</th><th>Pérdida del Gusto</th><th>Otros Síntomas</th><th>Estuvo en contacto con alguien en aislamiento</th><th>Estuvo en contacto con alguien que viajó</th><th>Viajes (Lugar)</th><th>Observaciones</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["fecha"]."</td>";
        echo "<td>".$row["hora"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "<td>".$row["temperatura"]."</td>";
        echo "<td>".$row["tos"]."</td>";
        echo "<td>".$row["insuficiencia_respiratoria"]."</td>";
        echo "<td>".$row["dolor_garganta"]."</td>";
        echo "<td>".$row["perdida_olfato"]."</td>";
        echo "<td>".$row["perdida_gusto"]."</td>";
        echo "<td>".$row["otros_sintomas"]."</td>";
        echo "<td>".$row["contacto_aislamiento"]."</td>";
        echo "<td>".$row["contacto_viajero"]."</td>";
        echo "<td>".$row["viajes_lugar"]."</td>";
        echo "<td>".$row["observaciones"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros.";
}
$conexion->close();
?>
