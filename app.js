var getData = function () {
    var codigoUcc = document.getElementById("codigoUcc").value;
    var nombres = document.getElementById("nombres").value;
    var primerApellido = document.getElementById("primerApellido").value;
    var segundoApellido = document.getElementById("segundoApellido").value;
    var genero = document.getElementById("genero").value;
    var telefono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;
    var rol = document.getElementById("rol").value;
    var contrasenna = document.getElementById("contrasenna").value;
    var verificar = document.getElementById("verificar").value;
    var estado = document.getElementById("estado").value;

    var user = new users(codigoUcc, nombres, primerApellido, segundoApellido, genero, telefono, email, rol, contrasenna, verificar, estado, "../modulos/user/insertarUsuario.php");
    user.AddUser();


}