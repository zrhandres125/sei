<?php
    require("conexion/connection.php");

?>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-centered">
                <h4 class="title is-4 has-text-grey-dark">
                    <span class="icon is-small">
                        <i class="zmdi zmdi-book"></i>
                    </span>
                    &nbsp; Indicadores calidad del huevo
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
                                    <i class="zmdi zmdi-search"></i>
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
                <p style="margin-top: 5px;">
                    <strong>U. Experimental: abc-123</strong>
                </p>
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
                    <span>Hoja de datos UE</span>
                </a>
            </div>
        </div>

        <br>

        <form action="#" id="form1">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile">&nbsp;</div>
                <div class="column is-4">
                    <h5 class="title is-5 has-text-grey-dark">General</h5>

                    <div class="field">
                        <label class="label">Peso del huevo</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor en gramos con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Color de la yema</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="" id="">
                                    <option selected value="0">Elige una opcion</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Inclusiones</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="" id="">
                                    <option selected value="0">Elige una opcion</option>
                                    <option value="">No tiene</option>
                                    <option value="">Carne</option>
                                    <option value="">Sangre</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Altura de la albúmina </label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor entre 0 y 99 con dos posiciones decimales</p>
                    </div>

                    <div class="field">
                        <label class="label">Peso de la albúmina </label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor entre 0 y 99 con una posición decimal</p>
                    </div>

                    <div class="field">
                        <label class="label">Unidades Haugh</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor con dos posiciones decimales</p>
                    </div>
                </div>

                <div class="column is-2 is-hidden-mobile">&nbsp;</div>

                <div class="column is-4">
                    <div class="field">
                        <label class="label">Color de la cáscara</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="" id="">
                                    <option selected value="0">Elige una opcion</option>
                                    <option value="">70</option>
                                    <option value="">80</option>
                                    <option value="">90</option>
                                    <option value="">100</option>
                                    <option value="">110</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Peso de la cáscara</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor entre 0 y 100 con una posición decimal</p>
                    </div>
                    
                    <h5 class="title is-5 has-text-grey-dark" style="margin-top: 30px;">
                        Grosor de la cáscara 
                    </h5>

                    <div class="field">
                        <label class="label">Ecuador</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor entero entre 0 y 1000</p>
                    </div>

                    <div class="field">
                        <label class="label">Polo ancho</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor entero entre 0 y 1000</p>
                    </div>

                    <div class="field">
                        <label class="label">Polo agudo</label>
                        <div class="control">
                            <input class="input is-hovered" type="text" name="" id="">
                        </div>
                        <p class="help">Valor entero entre 0 y 1000</p>
                    </div>

                    <div class="field is-grouped columns is-centered" style="margin-top: 10px;">
                        <div class="control column has-text-centered is-4">
                            <button class="button is-success is-active">
                                <span class="icon is-small">
                                    <i class="zmdi zmdi-floppy"></i>
                                </span>
                                <span>Guardar</span>
                            </button>
                        </div>

                        <div class="control column has-text-centered is-4">
                            <button class="button is-danger is-active" type="reset">
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
