<?php
	

    $num = $_GET['codigo'];
//exit("prueba".$num);
	EliminarProducto($num);

	function EliminarProducto($no)
	{
        include "conexion/connection.php";
		$sentencia="DELETE FROM usuarios WHERE codigoUCC='".$no."' ";
		//exit("prueba: ".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Usuario eliminado exitosamente");
	window.location.href='?page=usuarios/listarusuario';
</script>