<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Pedro Picapiedra</p>

      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">Menu Principal</li>
      <li class="active"><a href="#"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
      <li class="treeview">
        <a href="#"><i class='fa fa-cog'></i> <span>Ajustes</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#">Tasa de Cambio</a></li>
          <li><a href="#">Sucursales</a></li>
        </ul>
      </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-group'></i> <span>Clientes</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="/Clientes/Cliente/cliente.php" class="ajax-request">Clientes</a></li>
                <li><a href="#">Recibos</a></li>
                <li><a href="#">Reportes</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-book'></i> <span>Inventario</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="/inventario/categoria/categoria.php" class="ajax-request">Categoria</a></li>
                <li><a href="/inventario/impuesto/impuesto.php" class="ajax-request">Impuestos</a></li>
                <li><a href="/inventario/producto/producto.php" class="ajax-request">Producto</a></li>
                <li><a href="/inventario/marca/marca.php" class="ajax-request">Marca</a></li>
                <li><a href="#">Compras</a></li>
                <li><a href="#">Ajustes</a></li>
                <li><a href="#">Reportes</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-group'></i> <span>Proveedores</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Proveedores</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-credit-card'></i> <span>Punto de Ventas</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Cotizaciones</a></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Facturas</a></li>
            </ul>
      </li>
    </ul>
  </section>
</aside>
