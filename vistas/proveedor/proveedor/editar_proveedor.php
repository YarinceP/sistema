<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sistema/modelo/conexion.php');
$db = conexion('root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("SELECT *  FROM proveedor WHERE id_proveedor =" . $_GET['id']);
$stmt->execute();
$fila = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/proveedor/proveedor/proveedor.php">Proveedores</a></li>
        <li><a class="active" href="#">Editar Proveedor</a></li>
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
                        <form method="post" action="" id="formulario_editar_proveedor">
                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Identidad</label>
                                <input type="text" name="id_proveedor" id="id_proveedor" required maxlength="255"
                                       class="form-control" value="<?php echo $fila['id_proveedor']; ?>" readonly/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre</label>
                                <input type="text" name="nombre_proveedor" id="nombre_proveedor" required
                                       class="form-control" value="<?php echo $fila['nombre_proveedor']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre Comercial</label>
                                <input type="text" name="nombre_comercial" id="nombre_comercial" required
                                       class="form-control" value="<?php echo $fila['nombre_comercial']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">RTN</label>
                                <input type="text" name="rtn" id="rtn" required
                                       class="form-control" value="<?php echo $fila['rtn']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Telefono</label>
                                <input type="text" name="telefono" id="telefono" required
                                       class="form-control" value="<?php echo $fila['telefono']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Fax</label>
                                <input type="text" name="fax" id="fax" required
                                       class="form-control" value="<?php echo $fila['fax']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Correo</label>
                                <input type="email" name="correo" id="correo" required class="form-control"
                                       value="<?php echo $fila['correo']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Pagina Web</label>
                                <input type="text" name="web" id="web" required class="form-control"
                                       value="<?php echo $fila['web']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Descuento de credito</label>
                                <input type="number" name="descuento_credito" id="descuento_credito" required
                                       class="form-control" value="<?php echo $fila['descuento_credito']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Limite de credito</label>
                                <input type="number" name="limite_credito" id="limite_credito" required
                                       class="form-control" value="<?php echo $fila['limite_credito']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Direccion</label>
                                <input type="text" name="direccion" id="direccion" required
                                       class="form-control" value="<?php echo $fila['direccion']; ?>"/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Contacto</label>
                                <input type="text" name="contacto" id="contacto" required
                                       class="form-control" value="<?php echo $fila['contacto']; ?>"/>
                            </div>

                            <?php

                            if ($fila['forma_pago'] == 1) {

                                $seleccion = "CREDITO";
                                $noSeleccion = "CONTADO";
                                $idFormaPago = 2;

                            } else {
                                $seleccion = "CONTADO";
                                $noSeleccion = "CREDITO";
                                $idFormaPago = 1;
                            }

                            if ($fila['estado']==0){
                                $seleccion2 = "HABILITADO";
                                $noSeleccion2 = "DESABILITADO";
                                $idEstado = 1;
                            }else{
                                $seleccion2 = "DESABILITADO";
                                $noSeleccion2 = "HABILITADO";
                                $idEstado = 0;
                            }

                            ?>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Forma de Pago</label>
                                <select name="forma_pago" id="forma_pago" class="form-control">
                                    <option selected value="<?php echo $fila['forma_pago'] ?>"><?php echo $seleccion ?></option>
                                    <option value="<?php echo $idFormaPago ?>"><?php echo $noSeleccion?></option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Estado</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option selected value="<?php echo $fila['estado']?>"><?php echo $seleccion2?></option>
                                    <option value="<?php echo $idEstado ?>"><?php echo $noSeleccion2?></option>
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-primary pull-right" value="Guardar cambios"/>
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
    $(formulario_editar_proveedor).ready(function () {
        $('input[type="submit"]').removeAttr('');
    });
    $(formulario_editar_proveedor).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/proveedor/editar_proveedor.php',
            data: $("#formulario_editar_proveedor").serialize(),
            dataType: 'html',
            success: function (data) {
                console.log(data);
                if (data == "Ok") {
                    swal({
                        title: "Informacion",
                        text: " Registro editado correctamente ",
                        icon: "success",
                        html: true,
                        confirmButtonText: "Cerrar"
                    });
                    $('input[type="submit"]').attr("", "true");
                } else {
                    swal({
                        title: "Informacion",
                        icon: "error",
                        text: " Error ",
                        html: true,
                        confirmButtonText: "Cerrar",
                    });
                    $('input[type="submit"]').removeAttr('');
                }

            },
            error: function (data) {
                $('input[type="submit"]').removeAttr('');
                console.log(data);
            }
        });
    });
</script>