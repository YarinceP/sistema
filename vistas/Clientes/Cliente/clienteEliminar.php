<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sistema/modelo/conexion.php');
$db = conexion('root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("SELECT *  FROM cliente WHERE id_cliente =" . $_GET['id']);
$stmt->execute();
$fila= $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/clientes/cliente/cliente.php">Clientes</a></li>
        <li><a class="active" href="#">Eliminar Cliente</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Eliminar Cliente</strong></div>
                <div class="panel-body">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <form method="post" action="" id="formulario_eliminar_cliente">
                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Identidad</label>
                                <input type="text" name="id_cliente" id="id_cliente" required maxlength="255"
                                       class="form-control" value="<?php echo $fila['id_cliente'];?>" readonly/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Nombre</label>
                                <input type="text" name="nombre_proveedor" id="nombre_proveedor" required
                                       class="form-control" value="<?php echo $fila['nombre'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">RTN</label>
                                <input type="text" name="rtn" id="rtn" required
                                       class="form-control" value="<?php echo $fila['rtn'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Descuento Credito</label>
                                <input type="number" name="descuento_credito" id="descuento_credito"
                                       class="form-control" value="<?php echo $fila['descuento_credito'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Limite de Credito</label>
                                <input type="number" min="0" name="limite_credito" id="limite_credito" required
                                       class="form-control" value="<?php echo $fila['limite_credito'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Forma de pago</label>
                                <input type="text" name="contacto" id="contacto" required
                                       class="form-control" value="<?php if($fila['forma_pago']){
                                    echo "Credito";
                                } else{
                                    echo "Descuento";
                                }?>" disabled/>
                            </div>


                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Dirección</label>
                                <input type="text" name="direccion" id="direccion" required
                                  class="form-control" value="<?php echo $fila['direccion'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Telefono</label>
                                <input type="tel" name="telefono" id="telefono" required
                                       class="form-control" value="<?php echo $fila['telefono'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Web</label>
                                <input type="text" name="web" id="web" required
                                       class="form-control" value="<?php echo $fila['web'];?>" disabled/>
                            </div>

                            <div class="col-sm-6">
                                <label class='control-sidebar-subheading' for="fecha">Correo</label>
                                <input type="email" name="correo" id="correo" required
                                       class="form-control" value="<?php echo $fila['correo'];?>" disabled/>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-primary pull-right" value="Eliminar Cliente" disabled/>
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
    $(formulario_eliminar_cliente).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(formulario_eliminar_cliente).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/cliente/eliminar_cliente.php',
            data: $("#formulario_eliminar_cliente").serialize(),
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