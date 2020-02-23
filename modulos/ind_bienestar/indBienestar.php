<?php
    require("conexion/connection.php");

?>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-assignment"></i>
                    </span>
                    &nbsp; Indicadores de bienestar
                </h4>
            </div>

            <div class="column is-4 is-hidden-mobile">&nbsp;</div>
            
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
                                    <i class="zmdi zmdi-folder"></i>
                                </span>
                            </p>
                        </div>
                        <p class="control has-text-centered is-hidden-desktop">
                            <a class="button is-hovered">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-apps"></i>
                                </span>
                                <span>Escanear</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="columns">
            <div class="column is-4 has-text-centered">

                <div class="field is-grouped is-grouped-multiline">
                    <div class="control">
                        <div class="tags has-addons">
                            <span class="tag is-dark">Recomendación</span>
                            <span class="tag is-info">Registro de indicadores una vez por semana</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="column is-4 has-text-centered">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Espécimen:</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-narrow">
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select>
                                        <option>Elegir una opcion</option>
                                        <option>ABC01</option>
                                        <option>ABC02</option>
                                        <option>ABC03</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-4 has-text-centered">
                <a class="button is-primary is-hovered" href="">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-file-text"></i>
                    </span>
                    <span>Hoja de datos</span>
                </a>
            </div>
        </div>

        <form action="#" id="form1" style="margin-top: 50px">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h5 class="title is-5 has-text-grey-dark">General</h5>
                    <div class="field">
                        <label class="label">Daño de la quilla</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="" id="">
                                    <option selected value="0">Elige una opcion</option>
                                    <option value="1">Recta</option>
                                    <option value="2">Desviada</option>
                                    <option value="3">Fracturada</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Relación H/L</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor de 0 a 9 con dos posiciones decimales</p>
                    </div>

                    <div class="field">
                        <label class="label">Inmovilidad tónica</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor en segundos con cero posiciones decimales</p>
                    </div>

                    <div class="field">
                        <label class="label">Inmovilidad tónica</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor en segundos con cero posiciones decimales</p>
                    </div>

                    <h5 class="title is-5 has-text-grey-dark" style="margin-top: 30px;">
                        Variabilidad de la frecuencia cardiaca
                    </h5>

                    <div class="field">
                        <label class="label">Frecuencia cardiaca</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor entero de 0 a 500</p>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">SDSS</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor de 0 a 100 con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">SD SD</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor de 0 a 100 con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">RMSSD</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Relación BF / AF</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor de 0 a 9 con dos posiciones decimales</p>
                    </div>

                    <div class="field">
                        <label class="label">Temperatura</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor en grados centígrados con una posición decimal</p>
                    </div>

                    <div class="field is-grouped" style="margin-top: 30px;">
                        <div class="control">
                            <button class="button is-primary is-active" onclick="getData()">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-floppy"></i>
                                </span>
                                <span>Guardar</span>
                            </button>
                        </div>

                        <div class="control">
                            <button class="button is-primary is-active" type="reset">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                                <span>Cancelar</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
            </div>
        </form>










    </div>
</section>
