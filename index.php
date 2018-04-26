<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sistema/modelo/conexion.php');
$db = conexion('root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("SELECT COUNT(id_cliente) as a FROM cliente");
$stmt2 = $db->prepare("SELECT COUNT(id_proveedor) as a FROM proveedor");
$stmt3 = $db->prepare("SELECT COUNT(codigo_pk) as a FROM producto");
$stmt4 = $db->prepare("SELECT COUNT(id_vendedor) as a FROM vendedor");
$stmt->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$fila= $stmt->fetch(PDO::FETCH_ASSOC);
$fila2= $stmt2->fetch(PDO::FETCH_ASSOC);
$fila3= $stmt3->fetch(PDO::FETCH_ASSOC);
$fila4= $stmt4->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<?php include('vistas/layouts/htmlheader.php'); ?>
<body class="skin-blue sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <?php include('vistas/layouts/mainheader.php'); ?>
    <?php include('vistas/layouts/sidebar.php'); ?>
    <div class="content-wrapper" >
      <section class="content" id="contenido">
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $fila2['a']?></h3>

              <p>Proveedores</p>
            </div>
            <div class="icon">
              <i class="icon ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Más información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $fila3['a']?></h3>

              <p>Productos</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-cart-outline"></i>
            </div>
            <a href="#" class="small-box-footer">Más información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $fila['a']?></h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/clientes/cliente/cliente.php" class="ajax-request" >Más información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $fila4['a']?></h3>

              <p>Vendedores</p>
            </div>
            <div class="icon">
              <i class="icon ion-android-people"></i>
            </div>
            <a href="#" class="small-box-footer">Más información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </section>
    </div>
    <?php include('vistas/layouts/footer.php'); ?>
  </div>
  <?php include('vistas/layouts/scripts.php'); ?>
</body>
</html>
