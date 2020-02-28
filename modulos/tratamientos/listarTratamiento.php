<?php
require("conexion/connection.php");
require("consultaTratamientos.php");
?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </span>
                    &nbsp; Modulo Tratamientos
                </h4>
            </div>
            <div class="column is-4 has-text-centered">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Buscar:</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-grouped">
                            <p class="control is-expanded has-icons-right">
                                <input class="input is-hovered" type="text" required>
                                <span class="icon is-small is-right">
                                    <i class="zmdi zmdi-format-list-bulleted"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4 has-text-centered">
                <a class="button is-primary is-hovered" href="?page=tratamientos/registroTratamiento">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                    </span>
                    <span>Agregar Tratamiento</span>
                </a>
            </div>
        </div>

        <div class="columns">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th class="has-text-centered">Nombre</th>
                                <th class="has-text-centered">Observaciones</th>
                                <th class="has-text-centered">Status</th>
                                <th class="has-text-centered">Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="datosTratamiento">
                            <?php
                            foreach ($query as $row) {?>
                            <tr data-idUser="<?php echo $row['nombre']?>">
                                <td class="has-text-centered">
                                    <?php echo $row['nombre'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['observaciones'];?>
                                </td>
                                <td class="has-text-centered">
                                    <?php echo $row['status_tratamiento'];?>
                                </td>
                                <td>
                                    <div class="buttons has-addons is-centered">
                                        <a class="button is-success is-active is-small" href='?page=tratamientos/actualizarTratamiento&nombre=<?php echo $row['nombre'];?>'>
                                            <span class="icon is-small">
                                                <i class="zmdi zmdi-edit"></i>
                                            </span>
                                        </a>

                                        <a class="button is-danger is-active is-small" href='?page=tratamientos/eliminarTratamiento&nombre=<?php echo $row['nombre'];?>'>
                                            <span class="icon is-small">
                                                <i class="zmdi zmdi-close"></i>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
