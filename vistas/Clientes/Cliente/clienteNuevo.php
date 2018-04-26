<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/clientes/cliente/cliente.php">Clientes</a></li>
        <li><a class="active" href="#">Nuevo Clientes</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Nuevo Cliente</strong></div>
                <div class="panel-body">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <form method="post" action="" id="formulario_crear_cliente">
                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Identidad</label>
                                <input type="text" name="id_cliente" id="id_cliente" required maxlength="255"
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre</label>
                                <input type="text" name="nombre" id="nombre" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">RTN</label>
                                <input type="text" name="rtn" id="rtn" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Descuento Credito</label>
                                <input type="number" name="descuento_credito" id="descuento_credito" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Limite de Credito</label>
                                <input type="number" min="0" name="limite_credito" id="limite_credito" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Forma de pago</label>
                                <select name="forma_pago" id="forma_pago" class="form-control">
                                    <option selected>[SELECCIONE]</option>
                                    <option value="1">CREDITO</option>
                                    <option value="2">CONTANDO</option>
                                </select>
                            </div>


                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Dirección</label>
                                <input type="text" name="direccion" id="direccion" required class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Telefono</label>
                                <input type="tel" name="telefono" id="telefono" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Web</label>
                                <input type="text" name="web" id="web" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Correo</label>
                                <input type="email" name="correo" id="correo" required
                                       class="form-control"/>
                            </div>


                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-primary pull-right" value="Crear Cliente" disabled/>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(formulario_crear_cliente).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(formulario_crear_cliente).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/cliente/crear_cliente.php',
            data: $("#formulario_crear_cliente").serialize(),
            dataType: 'html',
            success: function (data) {
                console.log(data);
                if (data == "Ok") {
                    swal({
                        title: "<small>¡Informacion!</small>",
                        text: " Registro creado correctamente ",
                        icon: "success",
                        html: true,
                        confirmButtonText: "Cerrar"
                    });
                    $('input[type="submit"]').attr("disabled", "true");
                } else {
                    swal({
                        title: "<small>¡Informacion!</small>",
                        text: " Error ",
                        html: true,
                        confirmButtonText: "Cerrar",
                    });
                    $('input[type="submit"]').removeAttr('disabled');
                }

            },
            error: function (data) {
                $('input[type="submit"]').removeAttr('disabled');
                console.log(data);
            }
        });
    });
</script>