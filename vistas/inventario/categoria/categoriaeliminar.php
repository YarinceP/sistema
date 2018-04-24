<?php
$id=$_GET['id'];
$descripcion="";
$porcentaje=0;
$estado=0;
include($_SERVER['DOCUMENT_ROOT'].'/sistema/modelo/conexion.php');
$db=conexion('root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("SELECT *  FROM categoria where id_categoria=".$id);
$stmt->execute();
$fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
do{
  $descripcion=$fila[1];
}while($fila =$stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR))
?>
<div class="container-fluid">
	<ol class="breadcrumb">
		<li><a href="./">Inicio</a></li>
		<li><a class="ajax-request" href="/inventario/categoria/categoria.php">Categoria</a></li>
    <li><a class="active" href="#">Categoria Eliminar</a></li>
	</ol>
</div>
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Categoria Editar</div>
        <div class="panel-body">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <form method="post" action="" id="form_eliminar">
              <div class="col-sm-12">
                <label class='control-sidebar-subheading' for="fecha">Id</label>
                <input type="text" name="id" id="id" required maxlength="255" class="form-control" readonly value="<?php echo $id; ?>"/>
              </div>
              <div class="col-sm-12">
                <label class='control-sidebar-subheading' for="fecha">Descripcion</label>
                <input type="text" name="nombre" id="nombre" required maxlength="255" class="form-control" disabled value="<?php echo $descripcion; ?>"/>
              </div>
              <div class="col-sm-12">
                <br>
                <input type="submit" class="btn btn-danger" value="Enviar" disabled />
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
$(form_eliminar).ready(function(){
  $('input[type="submit"]').removeAttr('disabled');
});
$(form_eliminar).submit(function( event ) {
  event.preventDefault();
  $.ajax({
    type:"POST",
    url:  './controlador/impuesto/categoriaeliminar.php',
    data:$("#form_eliminar").serialize(),
    dataType: 'html',
    success: function(data){
      //var obj = jQuery.parseJSON( data);
      if(data=="Ok"){
        swal({
          title: "<small>¡Informacion!</small>",
          text: " Registro eliminado correctamente ",
          html: true,
          confirmButtonText: "Cerrar",
        });
        $('input[type="submit"]').attr("disabled", "true");
      }else{
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
    error: function(data){
      $('input[type="submit"]').removeAttr('disabled');
      console.log(data);
    }
  });
});
</script>
