<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/inventario/vendedor/vendedor.php">Vendedor</a></li>
        <li><a class="active" href="#">Vendedor Nuevo</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Vendedor Nuevo</div>
                <div class="panel-body">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <form method="post" action="" id="form_nuevo">
                            <div class="col-sm-12">
                                <label class='control-sidebar-subheading' for="fecha">Descripcion</label>
                                <input type="text" name="nombre" id="nombre" required maxlength="255"
                                       class="form-control"/>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Enviar" disabled/>
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
    $(form_nuevo).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(form_nuevo).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/vendedor/vendedorcrear.php',
            data: $("#form_nuevo").serialize(),
            dataType: 'html',
            success: function (data) {
                //var obj = jQuery.parseJSON( data);
                if (data == "Ok") {
                    swal({
                        title: "Informacion",
                        text: " Registro creado correctamente ",
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
