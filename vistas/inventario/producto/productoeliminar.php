<?php
$id = $_GET['id'];

include($_SERVER['DOCUMENT_ROOT'] . '/sistema/modelo/conexion.php');
$db = conexion('root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("SELECT codigo_pk,codigo_barra,p.descripcion,sku_proveedor,costo_fijo,
                                    costo_variable, utilidad, precio,u.nombre,p.estado,c.nombre,m.nombre,i.porcentaje
                                    FROM producto as p,unidades as u,categoria as c,marca as m,impuesto as i
                                    WHERE p.unidades_fk=u.id_unidades AND p.categoria_fk=c.id_categoria AND
                                    p.impuesto_fk=i.id AND p.marca_fk=m.id_marca AND p.codigo_pk=" . $id);
$stmt->execute();
$fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
do {
    $codigo_barra = $fila[1];
    $descripcion = $fila[2];
    $sku_proveedor = $fila[3];
    $costo_fijo = $fila[4];
    $costo_variable = $fila[5];
    $utilidad = $fila[6];
    $precio = $fila[7];
    $nombreUnidad = $fila[8];
    $estadoProducto = $fila[9];
    $nombreCategoria = $fila[10];
    $nombreMarca = $fila[11];
    $porcentajeImpuesto = $fila[12];


} while ($fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR))
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/inventario/producto/producto.php">Producto</a></li>
        <li><a class="active" href="#">Producto Nuevo</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Producto Nuevo</div>
                <div class="panel-body">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <form method="post" action="" id="form_eliminar">
                            <!-- fila 1 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Codigo</label>
                                    <input type="text" name="codigo_pk" value="<?php echo $id ?>" id="codigo_pk"
                                           required maxlength="255" class="form-control" readonly/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Codigo Barra</label>
                                    <input type="text" name="codigo_barra" id="" class="form-control" readonly/>
                                </div>

                            </div>
                            <!-- fila 2 -->
                            <div class="row">

                                <div class="col-sm-12">
                                    <label class='control-sidebar-subheading' for="fecha">Descripcion</label>
                                    <input type="text" name="descripcion" id="" value="<?php echo $descripcion ?>"
                                           maxlength="255" class="form-control" readonly/>
                                </div>

                            </div>
                            <!-- fila 3 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">SKU Proveedor</label>
                                    <input type="text" name="sku_proveedor" id="nombre"
                                           value="<?php echo $sku_proveedor ?>" maxlength="255" class="form-control"
                                           readonly/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Familia</label>
                                    <input type="text" name="categoria_fk" id="categoria_fk"
                                           value="<?php echo $nombreCategoria ?>" maxlength="255" class="form-control"
                                           readonly/>
                                </div>

                            </div>
                            <!-- fila 4 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Marca</label>
                                    <input type="text" name="marca_fk" id="marca_fk" value="<?php echo $nombreMarca ?>"
                                           maxlength="255" class="form-control" readonly/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Impuesto</label>
                                    <input type="text" name="impuesto_fk" id="impuesto_fk"
                                           value="<?php echo $porcentajeImpuesto ?>" maxlength="255"
                                           class="form-control" readonly/>
                                </div>

                            </div>
                            <!-- fila 5 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Unidades</label>
                                    <input type="text" name="unidades_fk" id="unidades_fk"
                                           value="<?php echo $nombreUnidad ?>" maxlength="255" class="form-control"
                                           readonly/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Porcentaje</label>
                                    <input type="number" name="porcentaje" id="precio" step="any" class="form-control"
                                           readonly/>
                                </div>

                            </div>
                            <?php /*FIXME: Cambiar el name y el id de los fields siguientes */ ?>

                            <!-- fila 6 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Costo Fijo</label>
                                    <input type="number" name="costo_fijo" id="" value="<?php echo $costo_fijo ?>"
                                           step="any" class="form-control" readonly/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Costo Variable</label>
                                    <input type="number" name="costo_variable" id=""
                                           value="<?php echo $costo_variable ?>" step="any" class="form-control"
                                           readonly/>
                                </div>

                            </div>

                            <!-- fila 7 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Utilidad</label>
                                    <input type="number" name="utilidad" id="" value="<?php echo $utilidad ?>"
                                           step="any" class="form-control" readonly/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Precio</label>
                                    <input type="number" name="precio" id="" value="<?php echo $precio ?>" step="any"
                                           class="form-control" readonly/>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-danger" value="Enviar" disabled/>
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
    $(form_eliminar).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(form_eliminar).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/producto/productoeliminar.php',
            data: $("#form_eliminar").serialize(),
            dataType: 'html',
            success: function (data) {
                //var obj = jQuery.parseJSON( data);
                if (data == "Ok") {
                    swal({
                        title: "<small>¡Informacion!</small>",
                        text: " Registro eliminado correctamente ",
                        html: true,
                        confirmButtonText: "Cerrar",
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

                //var json = $.parseJSON(data);

            },
            error: function (data) {
                $('input[type="submit"]').removeAttr('disabled');
                console.log(data);
            }
        });
    });
</script>
