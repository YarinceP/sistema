<div class="container-fluid">
	<ol class="breadcrumb">
		<li><a href="./">Inicio</a></li>
		<li><a class="active" href="#">Producto</a></li>
	</ol>
</div>
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <h3 class="page-header">
        <a class="btn btn-primary ajax-request" href="/inventario/producto/productonuevo.php">
          <i class="fa fa-plus"></i> Nuevo Producto
        </a>
      </h3>
    </div>
  </div>
</div>

<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Listado de Productos</div>
        <div class="panel-body">
          <div class="col-md-12 ">
            <table class="table table-striped table-condensed" id="datos">
              <thead>
                <th>Codigo</th>
                <th>Codigo Barra</th>
                <th>Descripcion</th>
                <th>SKU Proveedor</th>
                <th>Familia</th>
                <th>Marca</th>
                <th>Impuesto</th>
                <th>Unidades</th>
                <th>Descuento</th>
                <th>Costo Fijo</th>
                <th>Costo Variable</th>
                <th>Utilidad</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Unidades</th>
                <th>Opciones</th>
              </thead>
              <tbody>
                <?php
                
                include($_SERVER['DOCUMENT_ROOT'].'/sistema/modelo/conexion.php');
                $db=conexion('root','K17OACX');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $db->prepare("SELECT *  FROM producto");
                $stmt->execute();
                $fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
                do{/*TODO:Arrreglar la Manera de mostar los datos*/
                  echo "<tr>";
                  echo "<td>".$fila[0]."</td>";
                  echo "<td>".$fila[1]."</td>";
                  echo "<td>".$fila[2]."</td>";
                  echo "<td>".$fila[3]."</td>";
                  echo "<td>".$fila[4]."</td>";
                  echo "<td>".$fila[5]."</td>";
                  echo "<td>".$fila[6]."</td>";
                  echo "<td>".$fila[7]."</td>";
                  echo "<td>".$fila[8]."</td>";
                  echo "<td>".$fila[9]."</td>";
                  echo "<td>".$fila[10]."</td>";
                  echo "<td>".$fila[11]."</td>";
                  echo "<td>".$fila[12]."</td>";
                  echo "<td>".$fila[13]."</td>";
                  echo "<td>".($fila[14]==0?'Deshabilitado':'Habilitado')."</td>";
                  echo '<td>
                  <a class="btn btn-primary ajax-request" href="/inventario/producto/productoeditar.php?id='.$fila[0].'">
                  <i class="fa fa-pencil"></i>
                  </a>
                  <a class="btn btn-success ajax-request" href="/inventario/producto/productoconsultar.php?id='.$fila[0].'">
                  <i class="fa fa-search"></i>
                  </a>
                  <a class="btn btn-danger ajax-request" href="/inventario/producto/productoeliminar.php?id='.$fila[0].'">
                  <i class="fa fa-trash"></i>
                  </a>
                  </td>';
                  echo "</tr>";
                }while($fila =$stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR))
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
$(document).ready(function(){
  $('#datos').DataTable();
});
</script>
