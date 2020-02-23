<?php
	

    $num = $_GET['nombre'];
//exit("prueba".$num);
	EliminarTratamiento($num);

	function EliminarTratamiento($no)
	{
        include "conexion/connection.php";
		$sentencia="DELETE FROM tratamientos WHERE nombre='".$no."' ";
		//exit("prueba: ".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Tratamiento eliminado exitosamente");
	window.location.href='?page=tratamientos/listarTratamiento';
</script>