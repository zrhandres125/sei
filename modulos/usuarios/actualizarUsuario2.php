<?php

$codigoUcc = $_POST["codigoUcc"];
$nombres = $_POST["nombres"];
$primerApellido = $_POST["primerApellido"];
$segundoApellido = $_POST["segundoApellido"];
$genero = $_POST["genero"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$rol = $_POST["rol"];
$contrasenna = $_POST["contrasenna"];
$verificar = $_POST["verificar"];

	ModificarProducto($codigoUcc,$nombres,$primerApellido,$segundoApellido,$genero,$telefono,$email,$rol,$contrasenna,$verificar);

	function ModificarProducto($acodigoUcc,$anombres,$aprimerApellido,$asegundoApellido,$agenero,$atelefono,$aemail,$arol,$acontrasenna,$averificar){
		include "conexion/connection.php";
		if ($averificar==$acontrasenna) {
			$acontrasenna=md5($acontrasenna);
		$sentencia="UPDATE usuarios SET codigoUCC='".$acodigoUcc."', nombres= '".$anombres."', primer_apellido='".$aprimerApellido."', segundo_apellido= '".$asegundoApellido."', genero= '".$agenero."', telefono= '".$atelefono."', email= '".$aemail."', id_rol= '".$arol."', password= '".$acontrasenna."' WHERE codigoUCC='".$acodigoUcc."' ";
		//exit("prueba".$sentencia);
		$resultado=mysqli_query($connection,$sentencia);
		}else {?>
<script type="text/javascript">
    alert("No se ha realizado el registro");
    window.location.href = '?page=usuarios/listarUsuario';

</script>
<?php
		}
        
	}
?>

<script type="text/javascript">
    alert("Registro Modificado exitosamente");
    window.location.href = '?page=usuarios/listarUsuario';

</script>
