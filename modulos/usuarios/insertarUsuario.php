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
$estado = $_POST["estado"];

require("conexion/connection.php");




$consultaUsuario = sprintf("SELECT codigoUCC from usuarios where codigoUCC='$codigoUcc'");

$resultado = mysqli_query($connection,$consultaUsuario);

if ($contrasenna != $verificar) {
    echo 3;
}else{
    if ($row_cnt = mysqli_num_rows($resultado)>0) {
        echo 2;
    } else {
        $contrasenna = md5($contrasenna);
        $sql = "INSERT INTO  usuarios (codigoUCC,nombres, primer_apellido,segundo_apellido,genero,telefono,email,id_rol,password,status_usuario) VALUES ('$codigoUcc','$nombres','$primerApellido','$segundoApellido','$genero','$telefono','$email','$rol','$contrasenna','$estado')";
        mysqli_query($connection,$sql);
        
        echo 1;
    }
    
}



?>