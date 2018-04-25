<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sistema/modelo/conexion.php');
$db = conexion('root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("SELECT *  FROM proveedor WHERE id_proveedor =" . $_GET['id']);
$stmt->execute();
$fila= $stmt->fetch(PDO::FETCH_ASSOC);

?>
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
                        <form method="post" action="" id="formulario_eliminar_proveedor">
                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Identidad</label>
                                <input type="text" name="id_proveedor" id="id_proveedor" required maxlength="255"
                                       class="form-control" value="<?php echo $fila['id_proveedor'];?>" readonly/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre</label>
                                <input type="text" name="nombre_proveedor" id="nombre_proveedor" required
                                       class="form-control" value="<?php echo $fila['nombre_proveedor'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre Comercial</label>
                                <input type="text" name="nombre_comercial" id="nombre_comercial" required
                                       class="form-control" value="<?php echo $fila['nombre_comercial'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">RTN</label>
                                <input type="text" name="rtn" id="rtn" required
                                       class="form-control" value="<?php echo $fila['rtn'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Telefono</label>
                                <input type="text" name="telefono" id="telefono" required
                                       class="form-control" value="<?php echo $fila['telefono'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Fax</label>
                                <input type="text" name="fax" id="fax" required
                                       class="form-control" value="<?php echo $fila['fax'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Correo</label>
                                <input type="email" name="correo" id="correo" required class="form-control"
                                       value="<?php echo $fila['correo'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Pagina Web</label>
                                <input type="text" name="web" id="web" required class="form-control"
                                       value="<?php echo $fila['web'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Descuento de credito</label>
                                <input type="number" name="descuento_credito" id="descuento_credito" required
                                       class="form-control" value="<?php echo $fila['descuento_credito'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Limite de credito</label>
                                <input type="number" name="limite_credito" id="limite_credito" required
                                       class="form-control" value="<?php echo $fila['limite_credito'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Direccion</label>
                                <input type="text" name="direccion" id="direccion" required
                                       class="form-control" value="<?php echo $fila['direccion'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Contacto</label>
                                <input type="text" name="contacto" id="contacto" required
                                       class="form-control" value="<?php echo $fila['contacto'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Forma de Pago</label>
                                <input type="text" name="contacto" id="contacto" required
                                       class="form-control" value="<?php echo $fila['contacto'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Estado</label>
                                <input type="text" name="contacto" id="contacto" required
                                       class="form-control" value="<?php if($fila['estado']){
                                    echo "Habilitado";
                                } else{
                                    echo "Dehabiitado";
                                }?>" disabled/>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-primary pull-right" value="Eliminar Proveedor" disabled/>
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
    $(formulario_eliminar_proveedor).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(formulario_eliminar_proveedor).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/proveedor/eliminar_proveedor.php',
            data: $("#formulario_eliminar_proveedor").serialize(),
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