<?php
 
  $num = $_GET['codigo'];


  $consulta=ConsultarProducto($num);

  function ConsultarProducto($a){
    include "conexion/connection.php";
    
    $sentencia="SELECT
    usuarios.codigoUCC,
    CONCAT(usuarios.nombres,' ',usuarios.primer_apellido) AS 'Nombres y Apellidos',
    roles.nombre_rol,
    usuarios.genero,
    usuarios.telefono,
    usuarios.email,
    IF(usuarios.status_usuario = '1', 'Activo', 'Inactivo') AS 'Estado'
    FROM
    usuarios
    INNER JOIN roles ON usuarios.id_rol = roles.id_rol WHERE codigoUCC='".$a."'";
    
    $resultado=mysqli_query($connection,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    //exit("prueba ".$resultado);
    return [
      $filas['codigoUCC'],
      $filas['Nombres y Apellidos'],
	  $filas['nombre_rol'],
	  $filas['genero'],
	  $filas['telefono'],
	  $filas['email'],
      $filas['Estado'],
    ];

  }
 
?>

<script type="text/javascript">
    alert("<?php echo("Codigo ucc: ".$consulta[0].'\n'); 
                echo("Nombre: ".$consulta[1].'\n');
                echo("Tipo usuario: ".$consulta[2].'\n');
                echo("Genero: ".$consulta[3]).'\n';
                echo("Telefono: ".$consulta[4]).'\n';
                echo("Email: ".$consulta[5]).'\n';
                echo("Estado: ".$consulta[6]).'\n';
                ?>");
	window.location.href='?page=usuarios/listarUsuario';
</script>