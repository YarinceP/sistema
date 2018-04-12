<?php
include '../../../controlador/producto/querys.php';
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
            <form method="post"  action="" id="form_nuevo">
           <!-- fila 1 -->
            <div class="row">

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">Codigo</label>
                <input  type="text" name="codigo_pk" id="codigo_pk" required maxlength="255" class="form-control" readonly/>
              </div>

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">Codigo Barra</label>
                <input type="text" name="codigo_barra" id=""  class="form-control"/>
              </div>

            </div>
           <!-- fila 2 -->
            <div class="row">

              <div class="col-sm-12">
                <label class='control-sidebar-subheading' for="fecha">Descripcion</label>
                <input type="text" name="descripcion" id="" required maxlength="255" class="form-control"/>
              </div>

            </div>
            <!-- fila 3 -->
            <div class="row">

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">SKU Proveedor</label>
                <input type="text" name="sku_proveedor" id="nombre" required maxlength="255" class="form-control"/>
              </div>

            <!-- invocacion de las funciones para llenar los combobox -->
            <?php 
/*TODO: Hacer los demas inputs select*/
                $categoria=categorialista();//Asignacion de la funcion de la lista de categorias
                $marca=marcalista();//Asignacion de la funcion de la lista de marca
                $impuesto=impuestolista();//Asignacion de la funcion de la lista de impuesto
                $unidades=unidadeslista()//Asignacion de la funcion de la lista de unidades

            ?>
              <div class="col-sm-6">
              <label class='control-sidebar-subheading' for="fecha">Familias</label>
              <select class="form-control" id="categoria_fk" name="categoria_fk">
                <option selected="selected">Ninguna</option>
                  <?php
                    foreach ($categoria as $categoria) {?>
                <option value="<?php echo $categoria['id_categoria']?>"><?php echo $categoria['nombre']?></option>
                  <?php
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
                <option selected="selected">Ninguna</option>
                  <?php
                    foreach ($marca as $marca) {?>
                <option value="<?php echo $marca['id_marca']?>"><?php echo $marca['nombre']?></option>
                  <?php
                  }
                  ?>
              </select>
              </div>

              <div class="col-sm-6">
              <label class='control-sidebar-subheading' for="fecha">Impuesto</label>
              <select class="form-control" id="impuesto_fk" name="impuesto_fk">
                <option selected="selected">Ninguna</option>
                  <?php
                    foreach ($impuesto as $impuesto) {?>
                <option value="<?php echo $impuesto['id']?>"><?php echo $impuesto['descripcion']?></option>
                  <?php
                  }
                  ?>
              </select>
              </div>


            </div>
            <!-- fila 5 -->
            <div class="row">

              <div class="col-sm-6">
              <label class='control-sidebar-subheading' for="fecha">Unidades</label>
              <select class="form-control" id="unidades_fk" name="unidades_fk">
                <option selected="selected">Ninguna</option>
                  <?php
                    foreach ($unidades as $unidades) {?>
                <option value="<?php echo $unidades['id_unidades']?>"><?php echo $unidades['descripcion']?></option>
                  <?php
                  }
                  ?>
              </select>
              </div>

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">Porcentaje</label>
                <input type="number" name="porcentaje" id="precio" required step="any" class="form-control"/>
              </div>

            </div>
<?php /*FIXME: Cambiar el name y el id de los fields siguientes */?>

            <!-- fila 6 -->
            <div class="row">

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">Costo Fijo</label>
                <input type="number" name="costo_fijo" id="" required step="any" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">Costo Variable</label>
                <input type="number" name="costo_variable" id="" required step="any" class="form-control"/>
              </div>

            </div>

            <!-- fila 7 -->
            <div class="row">

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">Utilidad</label>
                <input type="number" name="utilidad" id="" required step="any" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class='control-sidebar-subheading' for="fecha">Precio</label>
                <input type="number" name="precio" id="" required step="any" class="form-control"/>
              </div>

            </div>



              <div class="col-sm-12">
                <br>
                <input type="submit" class="btn btn-primary" value="Enviar" disabled />
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
<?php $id=$_POST['categoria_fk']?>
<input type="text" id="idNew" value="<?php echo str_pad($id,4,"0",STR_PAD_LEFT); ?>"  >
<script>
$(form_nuevo).ready(function(){
    $('input[type="submit"]').removeAttr('disabled');
    
});
//Mostrar codigo de la familia
     $("#categoria_fk").on("change", function(){
       // $("#codigo_pk").val("");//Limpiamos
      
      
       $("#codigo_pk").val($("#idNew").val()); //aqui le asignamos un valor el cual usted define
    });
$(form_nuevo).submit(function( event ) {
  event.preventDefault();
  $.ajax({
    type:"POST",
    url:  './controlador/producto/productocrear.php',
    data:$("#form_nuevo").serialize(),
    dataType: 'html',
    success: function(data){
      //var obj = jQuery.parseJSON( data);
      if(data=="Ok"){
        swal({
          title: "<small>¡Informacion!</small>",
          text: " Registro creado correctamente ",
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