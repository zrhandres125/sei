<?php

require("conexion/connection.php");

$consultar = "SELECT
tratamientos.id_tratamiento,
tratamientos.nombre,
tratamientos.observaciones,
tratamientos.status_tratamiento
FROM
tratamientos
ORDER BY
tratamientos.id_tratamiento ASC";
$query = mysqli_query($connection,$consultar);
$array = mysqli_fetch_array($query);

?>