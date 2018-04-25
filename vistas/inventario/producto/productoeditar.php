<?php
$id = $_GET['id'];

include($_SERVER['DOCUMENT_ROOT'] . '/sistema/modelo/conexion.php');


$db = conexion('root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("select * from producto  where codigo_pk=" . $id);
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
    $idProductoUnidades = $fila[8];
    $estadoProducto = $fila[9];
    $idProductoCategoria = $fila[10];
    $idMarcaProducto = $fila[11];
    $idProductoImpuesto = $fila[12];


} while ($fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR))
?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/inventario/producto/producto.php">Producto</a></li>
        <li><a class="active" href="#">Editar Porducto</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Producto</div>
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
                                           required maxlength="255" class="form-control" required readonly/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Codigo Barra</label>
                                    <input type="text" name="codigo_barra" id="" class="form-control"/>
                                </div>

                            </div>
                            <!-- fila 2 -->
                            <div class="row">

                                <div class="col-sm-12">
                                    <label class='control-sidebar-subheading' for="fecha">Descripcion</label>
                                    <input type="text" name="descripcion" id="" value="<?php echo $descripcion ?>"
                                           maxlength="255" class="form-control" required/>
                                </div>

                            </div>
                            <!-- fila 3 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">SKU Proveedor</label>
                                    <input type="text" name="sku_proveedor" id="nombre"
                                           value="<?php echo $sku_proveedor ?>" maxlength="255" class="form-control"
                                           required/>
                                </div>

                                <!--                Asignar variables de arreglo                -->
                                <?php

                                function categorialista()
                                {
                                    try {
                                        $db = conexion("root", "");
                                        $query = ("Select * from categoria");
                                        $stmt = $db->prepare($query);
                                        $stmt->execute();

                                        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        return $arreglo;


                                    } catch (PDOException $e) {
                                        echo "Error: " . $e;
                                    }
                                }

                                function marcalista()
                                {
                                    try {
                                        $db = conexion("root", "");
                                        $query = ("Select * from marca");
                                        $stmt = $db->prepare($query);
                                        $stmt->execute();

                                        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        return $arreglo;

                                    } catch (PDOException $e) {
                                        echo "Error: " . $e;
                                    }
                                }

                                function impuestolista()
                                {
                                    try {
                                        $db = conexion("root", "");
                                        $query = ("Select * from impuesto");
                                        $stmt = $db->prepare($query);
                                        $stmt->execute();

                                        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        return $arreglo;

                                    } catch (PDOException $e) {
                                        echo "Error: " . $e;
                                    }
                                }

                                function unidadeslista()
                                {
                                    try {
                                        $db = conexion("root", "");
                                        $query = ("Select * from unidades");
                                        $stmt = $db->prepare($query);
                                        $stmt->execute();

                                        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        return $arreglo;

                                    } catch (PDOException $e) {
                                        echo "Error: " . $e;
                                    }
                                }


                                $categoria = categorialista();
                                $marca = marcalista();
                                $impuesto = impuestolista();
                                $unidades = unidadeslista();

                                ?>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Familias</label>
                                    <select class="form-control" id="categoria_fk" name="categoria_fk">
                                        <option selected="selected" value="<?php echo $idProductoCategoria ?>"><?php
                                            foreach ($categoria as $categoria2) {
                                                if ($categoria2['id_categoria'] == $idProductoCategoria) {
                                                    echo $categoria2['nombre'];
                                                }
                                            }
                                            ?></option>
                                        <?php
                                        foreach ($categoria as $categoria) {

                                            if ($categoria['id_categoria'] != $idProductoCategoria) {

                                                ?>
                                                <option value="<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['nombre'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <!-- fila 4 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Marca</label>
                                    <select class="form-control" id="marca_fk" name="marca_fk">
                                        <option selected="selected" value="<?php echo $idMarcaProducto ?>"><?php
                                            foreach ($marca as $marca2) {
                                                if ($marca2['id_marca'] == $idMarcaProducto) {
                                                    echo $marca2['nombre'];
                                                }
                                            }
                                            ?></option>
                                        <?php
                                        foreach ($marca as $marca) {

                                            if ($marca['id_marca'] != $idMarcaProducto) {

                                                ?>
                                                <option value="<?php echo $marca['id_marca'] ?>"><?php echo $marca['nombre'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Familias</label>
                                    <select class="form-control" id="impuesto_fk" name="impuesto_fk">
                                        <option selected="selected" value="<?php echo $idProductoImpuesto ?>"><?php
                                            foreach ($impuesto as $impuesto2) {
                                                if ($impuesto2['id'] == $idProductoImpuesto) {
                                                    echo $impuesto2['descripcion'];
                                                }
                                            }
                                            ?></option>
                                        <?php
                                        foreach ($impuesto as $impuesto) {

                                            if ($impuesto['id'] != $idProductoImpuesto) {

                                                ?>
                                                <option value="<?php echo $impuesto['id'] ?>"><?php echo $impuesto['descripcion'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <!-- fila 5 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Familias</label>
                                    <select class="form-control" id="unidades_fk" name="unidades_fk">
                                        <option selected="selected" value="<?php echo $idProductoUnidades ?>"><?php
                                            foreach ($unidades as $unidades2) {
                                                if ($unidades2['id_unidades'] == $idProductoUnidades) {
                                                    echo $unidades2['nombre'];
                                                }
                                            }
                                            ?></option>
                                        <?php
                                        foreach ($unidades as $unidades) {

                                            if ($unidades['id_unidades'] != $idProductoUnidades) {

                                                ?>
                                                <option value="<?php echo $unidades['id_unidades'] ?>"><?php echo $unidades['nombre'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Precio</label>
                                    <input type="number" name="precio" id="precio" value="<?php echo $precio ?>"
                                           step="any" class="form-control"
                                           required/>
                                </div>

                            </div>
                            <?php /*FIXME: Cambiar el name y el id de los fields siguientes */ ?>

                            <!-- fila 6 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Costo Fijo</label>
                                    <input type="number" name="costo_fijo" id="" value="<?php echo $costo_fijo ?>"
                                           step="any" class="form-control" required/>
                                </div>

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Costo Variable</label>
                                    <input type="number" name="costo_variable" id=""
                                           value="<?php echo $costo_variable ?>" step="any" class="form-control"
                                           required/>
                                </div>

                            </div>

                            <!-- fila 7 -->
                            <div class="row">

                                <div class="col-sm-6">
                                    <label class='control-sidebar-subheading' for="fecha">Utilidad</label>
                                    <input type="number" name="utilidad" id="" value="<?php echo $utilidad ?>"
                                           step="any" class="form-control" required/>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-success" value="Enviar" disabled/>
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
            url: './controlador/producto/productoactualizar.php',
            data: $("#form_eliminar").serialize(),
            dataType: 'html',
            success: function (data) {
                //var obj = jQuery.parseJSON( data);
                if (data == "Ok") {
                    swal({
                        title: "Informacion",
                        text: " Registro eliminado correctamente ",
                        icon: "success",
                        html: true,
                        confirmButtonText: "Cerrar",
                    });
                    $('input[type="submit"]').attr("disabled", "true");
                } else {
                    swal({
                        title: "Informacion",
                        icon: "error",
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
