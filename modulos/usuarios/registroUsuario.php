<?php
  $mysqli = new mysqli('localhost', 'root', '', 'sei');
?>


<script type="text/javascript" src="../../app.js"></script>
<script type="text/javascript" src="../../javascript/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../../javascript/users.js"></script>








<div>
    <form action="" id="form1">
        <b>Datos de identificacion</b>

        <br>

        <label>codigo UCC <input type="text" name="codigoUcc" id="codigoUcc" /></label>

        <br>

        <label>nombres* <input type="text" name="nombres" id="nombres" /></label>

        <br>

        <label>primer apellido* <input type="text" name="primerApellido" id="primerApellido" /></label>

        <br>

        <label>segundo apellido* <input type="text" name="segundoApellido" id="segundoApellido" /></label>

        <br>

        <label>nombres* <select name="genero" id="genero">

                <option selected value="0">Elige una opcion</option>

                <option value="1">Masculino</option>
                <option value="2">Femenino</option>

            </select></label>

        <br>

        <label>telefono* <input type="text" name="telefono" id="telefono" /></label>

        <br>

        <label>Email* <input type="text" name="email" id="email" /></label>

        <br>

        <b>credenciales de acceso</b>

        <br>

        <p>Tenga en cuenta que la contraseña debe tener entre 7 y 10 caracteres</p>

        <br>

        <label>rol*


            <select name="rol" id="rol">

                <option selected value="0">Elige una opcion</option>

                <?php
          $query = $mysqli -> query ("SELECT * FROM roles");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_rol].'">'.$valores[nombre_rol].'</option>';
          }
        ?>

            </select>





        </label>

        <br>

        <label>Contraseña* <input type="text" id="contrasenna" name="contrasenna" required/></label>

        <br>

        <label>Verificar Contraseña* <input type="text" id="verificar" name="verificar" /></label>

        <br>

        <label>estado* <select name="estado" id="estado">

                <option selected value="1">activo</option>
                <option value="0">inactivo</option>

            </select></label>


        <br>

        <button type=button onclick="getData()">Enviar</button>


    </form>
</div>
