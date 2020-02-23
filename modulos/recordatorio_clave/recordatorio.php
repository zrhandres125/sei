<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../recursos/icon/favicon.ico">
    <title>Sei | Recordatorio clave</title>
    <link rel="stylesheet" type="text/css" href="../../recursos/bulma-start/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../recursos/icon/css/material-design-iconic-font.min.css">
</head>

<body>
   
    <?php include ("../../includes/header.php"); ?>

    <section class="section is-medium">
        <div class="container">
            <div class="columns">
                <div class="column is-3 is-hidden-mobile">&nbsp;</div>
                <div class="column is-6">
                    <h4 class="title is-4 has-text-grey-dark has-text-centered">Recordatorio de clave</h4>
                    <p style="margin-bottom: 20px;">
                        Enviaremos la clave a la cuenta de correo que ingresó al momento del registro. Solo debe ingresar su código Ucc y presionar el botón "Terminar".
                    </p>
                    <form action="msg_clave.php">
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Código Ucc</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control has-icons-right">
                                        <input class="input is-hovered" type="text">
                                        <span class="icon is-small is-right">
                                            <i class="zmdi zmdi-accounts-list"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="button is-primary is-active is-fullwidth">
                            <span class="icon is-small">
                                <i class="zmdi zmdi-file-text"></i>
                            </span>
                            <span>Terminar</span>
                        </button>
                    </form>
                </div>
                <div class="column is-3 is-hidden-mobile">&nbsp;</div>
            </div>
        </div>
    </section>

    <?php include ("../../includes/footer.php"); ?>

    <script src="../../recursos/js/navbar.js"></script>
</body>

</html>
