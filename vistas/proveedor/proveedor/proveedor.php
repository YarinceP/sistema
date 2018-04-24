<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="../..">Inicio</a></li>
        <li><a class="active" href="#">Proveedor</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">
                <a class="btn btn-primary ajax-request" href="/proveedor/proveedor/crear_proveedor.php">
                    <i class="fa fa-plus"></i> Nuevo Proveedor
                </a>
            </h3>
        </div>
    </div>
</div>

<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Proveedores</div>
                <div class="panel-body">
                    <div class="col-md-12 ">
                        <table class="table table-striped table-condensed" id="datos">
                            <thead>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>RTN</th>
                            <th>DESCUENTO CREDITO</th>
                            <th>LIMITE CREDITO</th>
                            <th>FORMA DE PAGO</th>
                            <th>ESTADO</th>
                            <th>TELEFONO</th>
                            <th>OPCIONES</th>
                            </thead>
                            <tbody>
                            <?php
                            include($_SERVER['DOCUMENT_ROOT'] . '/sistema/modelo/conexion.php');
                            $db = conexion('root', 'K17OACX');
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $db->prepare("SELECT *  FROM proveedor");
                            $stmt->execute();
                            $fila= $stmt->fetchAll();
                            foreach ($fila as $item) {
                                echo "<tr>";
                                echo "<td>" . $item['id_proveedor'] . "</td>";
                                echo "<td>" . $item['nombre_proveedor'] . "</td>";
                                echo "<td>" . $item['rtn'] . "</td>";
                                echo "<td>" . $item['descuento_credito'] . "</td>";
                                echo "<td>" . $item['limite_credito'] . "</td>";
                                echo "<td>" . $item['telefono'] . "</td>";
                                echo "<td>";
                                if($item['estado'] == 1) {
                                    echo "Habilitado";
                                } else {
                                    echo "Deshabilitado";
                                }
                                echo "</td>";
                                echo "<td>" . $item['telefono'] . "</td>";
                                echo '<td>
                  <a class="btn btn-primary ajax-request" href="/proveedor/proveedor/editar_proveedor.php?id=' . $item['id_proveedor'] . '">
                  <i class="fa fa-pencil"></i>
                  </a>
                  <a class="btn btn-success ajax-request" href="/proveedor/proveedor/consultar_proveedor.php?id=' . $item['id_proveedor'] . '">
                  <i class="fa fa-search"></i>
                  </a>
                  <a class="btn btn-danger ajax-request" href="/proveedor/proveedor/eliminar_proveedor.php?id=' . $item['id_proveedor'] . '">
                  <i class="fa fa-trash"></i>
                  </a>
                  </td>';
                                echo "</tr>";
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#datos').DataTable();
    });
</script>