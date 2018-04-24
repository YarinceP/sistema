<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/proveedor/proveedor/proveedor.php">Proveedores</a></li>
        <li><a class="active" href="#">Nuevo Proveedor</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Nuevo Proveedor</strong></div>
                <div class="panel-body">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <form method="post" action="" id="formulario_crear_proveedor">
                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Identidad</label>
                                <input type="text" name="id_proveedor" id="id_proveedor" required maxlength="255"
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre</label>
                                <input type="text" name="nombre_proveedor" id="nombre_proveedor" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre Comercial</label>
                                <input type="text" name="nombre_comercial" id="nombre_comercial" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">RTN</label>
                                <input type="text" name="rtn" id="rtn" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Telefono</label>
                                <input type="text" name="telefono" id="telefono" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Fax</label>
                                <input type="text" name="fax" id="fax" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Correo</label>
                                <input type="email" name="correo" id="correo" required class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Pagina Web</label>
                                <input type="text" name="web" id="web" required class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Descuento de credito</label>
                                <input type="number" name="descuento_credito" id="descuento_credito" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Limite de credito</label>
                                <input type="number" name="limite_credito" id="limite_credito" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Direccion</label>
                                <input type="text" name="direccion" id="direccion" required
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Contacto</label>
                                <input type="text" name="contacto" id="contacto" required
                                       class="form-control"/>
                            </div>

                                <div class="col-sm-12">
                                    <br>
                                    <input type="submit" class="btn btn-primary pull-right" value="Crear Proveedor" disabled/>
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
    $(formulario_crear_proveedor).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(formulario_crear_proveedor).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/proveedor/crear_proveedor.php',
            data: $("#formulario_crear_proveedor").serialize(),
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