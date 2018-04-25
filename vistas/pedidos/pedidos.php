<section class="content">

    <form method="POST" action="http://localhost/proyectox/public/index.php/puntodeventas/pedido.crear"
          accept-charset="UTF-8"><input name="_token" type="hidden" value="7ZPJxJDOANcgazoyIjlo7xWH1D6vjA87IQdJCLN5">
        <div class="container-fluid spark-screen">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="page-header">

                    </h3>
                    <h3 class="page-header">
                        <input class="btn btn-primary fa fa-floppy-o" type="submit" value="Guardar">
                    </h3>
                </div>
            </div>
        </div>
        <div class="container-fluid spark-screen">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Crear Pedido</div>
                        <div class="panel-body">
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class='control-sidebar-subheading' for="fecha">Cliente</label>
                                                <input class="form-control" id="nombrecliente" required="required"
                                                       data-action="listaclientes1" name="nombrecliente" type="text"
                                                >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class='control-sidebar-subheading'
                                                       for="tipoAsiento">Direccion</label>
                                                <textarea class="form-control" maxlength="255" name="direccion"
                                                          cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class='control-sidebar-subheading' for="fecha">Telefono</label>
                                                <input class="form-control" id="telefono" maxlength="45" name="telefono"
                                                       type="text" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class='control-sidebar-subheading' for="tipoAsiento">RTN</label>
                                                <input class="form-control" id="rtn" maxlength="45" name="rtn"
                                                       type="text" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <o></o>
                                                <label class='control-sidebar-subheading' for="fecha">Forma Pago</label>
                                                <select class="form-control" required="required" id="formapago"
                                                        name="formapago">
                                                    <option value="1">Contado</option>
                                                    <option value="0">Credito</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class='control-sidebar-subheading'
                                                       for="tipoAsiento">Vendedor</label>
                                                <select class="form-control select2 " id="vendedor"
                                                        name="codigovendedor" required="required">
                                                    <option value="" selected="selected">[Vendedor]</option>
                                                    <option value="0">Juan Luis Martinez</option>
                                                    <option value="1">Vendedor General</option>
                                                    <option value="2">Arvir Montoya</option>
                                                    <option value="3">Jose Carrasco</option>
                                                    <option value="4">Oscar Martinez</option>
                                                    <option value="12">Eddy</option>
                                                    <option value="13">Vanessa Lopez</option>
                                                    <option value="14">Nelson Carrales</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class='control-sidebar-subheading' for="fecha">Fecha
                                                    entrega</label>
                                                <input class="form-control fecha" id="fecha" required="required"
                                                       name="fecha" type="text" value="2018-04-23">
                                            </div>
                                            <div class="col-sm-6">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <table>
                                            <tr>
                                                <td>Subtotal</td>
                                                <td><input class="form-control input-sm" id="subtotalfactura"
                                                           readonly="true" name="subtotal" type="text" value="0.00">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Impuesto</td>
                                                <td>
                                                    <input class="form-control input-sm" id="descuento" readonly="true"
                                                           name="descuento" type="hidden" value="0.00">
                                                    <input class="form-control input-sm" id="impuesto" readonly="true"
                                                           name="impuesto" type="text" value="0.00">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Subtotal + ISV</td>
                                                <td>
                                                    <input class="form-control input-sm" id="totalmasimpuesto"
                                                           readonly="true" name="totalmasimpuesto" type="text"
                                                           value="0.00">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flete</td>
                                                <td><input class="form-control input-sm" id="flete"
                                                           data-action="totalizar" name="flete" type="text"
                                                           value="0.00"></td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><input class="form-control input-sm" id="totalgeneral"
                                                           readonly="true" name="totalgeneral" type="text" value="0.00">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="col-md-6 ">
                                                <button type="button" class="btn btn-primary"
                                                        data-action="clone-element" data-element=".offer">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <input id="linea" data-action="codigocuenta" name="linea" type="hidden" value="">
                                <div class="col-md-12">
                                    <br>
                                    <table class='table table-condensed  table-bordered'>
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Codigo</th>
                                            <th>Descripcion</th>
                                            <th>Cantidad</th>
                                            <th>UN</th>
                                            <th>Precio</th>
                                            <th></th>
                                            <th align='right'>Impuesto</th>
                                            <th align='right'>Descuento</th>
                                            <th align='right'>Subtotal</th>
                                            <th align='right'>Total</th>
                                            <th align='right'>Existencia</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id='producto'>
                                        <tr>
                                            <td width='15px'>0</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[0]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[0][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[0]nombreproducto"
                                                       data-action="listaproducto" name="articulo[0][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[0]cantidad" data-action="precios"
                                                                    name="articulo[0][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[0]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[0][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[0]precio" data-action="precios"
                                                                    readonly="true" name="articulo[0][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[0]buscarprecio" name="articulo[0][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[0]isv" data-action="precios"
                                                                    readonly="true" name="articulo[0][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[0]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[0][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[0]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[0][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[0]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[0][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[0]total"
                                                       data-action="precios" readonly="true" name="articulo[0][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[0]existencia" readonly="true"
                                                                    name="articulo[0][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[0]limpiar" name="articulo[0][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>1</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[1]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[1][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[1]nombreproducto"
                                                       data-action="listaproducto" name="articulo[1][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[1]cantidad" data-action="precios"
                                                                    name="articulo[1][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[1]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[1][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[1]precio" data-action="precios"
                                                                    readonly="true" name="articulo[1][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[1]buscarprecio" name="articulo[1][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[1]isv" data-action="precios"
                                                                    readonly="true" name="articulo[1][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[1]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[1][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[1]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[1][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[1]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[1][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[1]total"
                                                       data-action="precios" readonly="true" name="articulo[1][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[1]existencia" readonly="true"
                                                                    name="articulo[1][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[1]limpiar" name="articulo[1][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>2</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[2]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[2][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[2]nombreproducto"
                                                       data-action="listaproducto" name="articulo[2][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[2]cantidad" data-action="precios"
                                                                    name="articulo[2][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[2]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[2][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[2]precio" data-action="precios"
                                                                    readonly="true" name="articulo[2][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[2]buscarprecio" name="articulo[2][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[2]isv" data-action="precios"
                                                                    readonly="true" name="articulo[2][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[2]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[2][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[2]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[2][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[2]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[2][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[2]total"
                                                       data-action="precios" readonly="true" name="articulo[2][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[2]existencia" readonly="true"
                                                                    name="articulo[2][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[2]limpiar" name="articulo[2][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>3</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[3]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[3][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[3]nombreproducto"
                                                       data-action="listaproducto" name="articulo[3][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[3]cantidad" data-action="precios"
                                                                    name="articulo[3][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[3]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[3][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[3]precio" data-action="precios"
                                                                    readonly="true" name="articulo[3][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[3]buscarprecio" name="articulo[3][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[3]isv" data-action="precios"
                                                                    readonly="true" name="articulo[3][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[3]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[3][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[3]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[3][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[3]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[3][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[3]total"
                                                       data-action="precios" readonly="true" name="articulo[3][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[3]existencia" readonly="true"
                                                                    name="articulo[3][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[3]limpiar" name="articulo[3][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>4</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[4]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[4][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[4]nombreproducto"
                                                       data-action="listaproducto" name="articulo[4][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[4]cantidad" data-action="precios"
                                                                    name="articulo[4][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[4]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[4][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[4]precio" data-action="precios"
                                                                    readonly="true" name="articulo[4][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[4]buscarprecio" name="articulo[4][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[4]isv" data-action="precios"
                                                                    readonly="true" name="articulo[4][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[4]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[4][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[4]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[4][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[4]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[4][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[4]total"
                                                       data-action="precios" readonly="true" name="articulo[4][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[4]existencia" readonly="true"
                                                                    name="articulo[4][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[4]limpiar" name="articulo[4][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>5</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[5]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[5][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[5]nombreproducto"
                                                       data-action="listaproducto" name="articulo[5][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[5]cantidad" data-action="precios"
                                                                    name="articulo[5][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[5]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[5][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[5]precio" data-action="precios"
                                                                    readonly="true" name="articulo[5][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[5]buscarprecio" name="articulo[5][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[5]isv" data-action="precios"
                                                                    readonly="true" name="articulo[5][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[5]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[5][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[5]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[5][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[5]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[5][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[5]total"
                                                       data-action="precios" readonly="true" name="articulo[5][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[5]existencia" readonly="true"
                                                                    name="articulo[5][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[5]limpiar" name="articulo[5][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>6</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[6]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[6][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[6]nombreproducto"
                                                       data-action="listaproducto" name="articulo[6][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[6]cantidad" data-action="precios"
                                                                    name="articulo[6][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[6]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[6][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[6]precio" data-action="precios"
                                                                    readonly="true" name="articulo[6][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[6]buscarprecio" name="articulo[6][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[6]isv" data-action="precios"
                                                                    readonly="true" name="articulo[6][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[6]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[6][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[6]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[6][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[6]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[6][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[6]total"
                                                       data-action="precios" readonly="true" name="articulo[6][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[6]existencia" readonly="true"
                                                                    name="articulo[6][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[6]limpiar" name="articulo[6][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>7</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[7]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[7][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[7]nombreproducto"
                                                       data-action="listaproducto" name="articulo[7][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[7]cantidad" data-action="precios"
                                                                    name="articulo[7][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[7]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[7][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[7]precio" data-action="precios"
                                                                    readonly="true" name="articulo[7][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[7]buscarprecio" name="articulo[7][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[7]isv" data-action="precios"
                                                                    readonly="true" name="articulo[7][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[7]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[7][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[7]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[7][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[7]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[7][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[7]total"
                                                       data-action="precios" readonly="true" name="articulo[7][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[7]existencia" readonly="true"
                                                                    name="articulo[7][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[7]limpiar" name="articulo[7][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>8</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[8]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[8][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[8]nombreproducto"
                                                       data-action="listaproducto" name="articulo[8][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[8]cantidad" data-action="precios"
                                                                    name="articulo[8][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[8]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[8][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[8]precio" data-action="precios"
                                                                    readonly="true" name="articulo[8][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[8]buscarprecio" name="articulo[8][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[8]isv" data-action="precios"
                                                                    readonly="true" name="articulo[8][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[8]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[8][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[8]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[8][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[8]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[8][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[8]total"
                                                       data-action="precios" readonly="true" name="articulo[8][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[8]existencia" readonly="true"
                                                                    name="articulo[8][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[8]limpiar" name="articulo[8][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>9</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[9]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[9][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5" id="tags[9]nombreproducto"
                                                       data-action="listaproducto" name="articulo[9][1]" type="text"
                                                       value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[9]cantidad" data-action="precios"
                                                                    name="articulo[9][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[9]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[9][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[9]precio" data-action="precios"
                                                                    readonly="true" name="articulo[9][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[9]buscarprecio" name="articulo[9][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[9]isv" data-action="precios"
                                                                    readonly="true" name="articulo[9][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[9]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[9][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[9]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[9][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[9]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[9][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[9]total"
                                                       data-action="precios" readonly="true" name="articulo[9][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[9]existencia" readonly="true"
                                                                    name="articulo[9][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[9]limpiar" name="articulo[9][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='15px'>10</td>
                                            <td width='85px'>
                                                <input class="form-control input-sm" id="tags[10]codigoproducto"
                                                       data-action="productos" readonly="true" name="articulo[10][0]"
                                                       type="text" value="">
                                            </td>
                                            <td>
                                                <input class="form-control input-sm" size="5"
                                                       id="tags[10]nombreproducto" data-action="listaproducto"
                                                       name="articulo[10][1]" type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm xprecio " size="3"
                                                                    id="tags[10]cantidad" data-action="precios"
                                                                    name="articulo[10][2]" type="text" value=""></td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[10]unidades" data-action="precios"
                                                                    readonly="true" name="articulo[10][3]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[10]precio" data-action="precios"
                                                                    readonly="true" name="articulo[10][4]" type="text"
                                                                    value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-search"
                                                        id="tags[10]buscarprecio" name="articulo[10][8]buscarprecio"
                                                        data-action="buscarprecios" type="button"></button>
                                            </td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[10]isv" data-action="precios"
                                                                    readonly="true" name="articulo[10][5]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm" size="3"
                                                                    id="tags[10]descuento" data-action="precios"
                                                                    readonly="true" name="articulo[10][6]" type="text"
                                                                    value=""></td>
                                            <td width='85px'><input class="form-control input-sm subtotal" size="3"
                                                                    id="tags[10]subtotal" data-action="precios"
                                                                    readonly="true" name="articulo[10][7]" type="text"
                                                                    value=""></td>
                                            <td width='85px'>
                                                <input class="form-control input-sm montoisv" size="3"
                                                       id="tags[10]montoimpuesto" data-action="precios" readonly="true"
                                                       name="articulo[10][8]" type="hidden" value="">
                                                <input class="form-control input-sm" size="3" id="tags[10]total"
                                                       data-action="precios" readonly="true" name="articulo[10][9]"
                                                       type="text" value="">
                                            </td>
                                            <td width='55px'><input class="form-control input-sm" size="3"
                                                                    id="tags[10]existencia" readonly="true"
                                                                    name="articulo[10][10]" type="text" value=""></td>
                                            <td width='35px'>
                                                <button class="form-control input-sm btn btn-default fa fa-trash"
                                                        id="tags[10]limpiar" name="articulo[10][10]limpiar"
                                                        data-action="limpiar" type="button"></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="modal fade" id="buscarcliente" role="dialog" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Listado de Terceros</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover" id="listaclientes">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre Tercero</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody id='listadodeterceros'>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>

        </div>

    </div>


    <div class="modal fade" id="buscarproducto" role="dialog" data-backdrop="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Lista de productos</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover" id="listaproductos">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>ISV</th>
                            <th>Total</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody id='productos'>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>

    </div>


    <script>
        var conteo_terceros = 1;
        var conteo_producto = 1;
    </script>
    <script>
        $(document).on('keypress', function (e) {
            if (e.which == 13) {
                e.preventDefault();
                var tipo_transaccion = 1;
                $.ajax({
                    type: "POST",
                    url: './vistas/pedidos/listado_terceros.php',
                    dataType: 'json',
                    data: {tipo_transaccion: tipo_transaccion},
                    success: function (data) {
                        if (conteo_terceros == 1) {
                            $.each(data, function (name, value) {
                                $("#listadodeterceros").append('<tr>' +
                                    '<td>' + data[name].id_tercero + '</td>' +
                                    '<td>' + data[name].nombre + '</td>' +
                                    '<td>' + '<a class="btn btn-primary">' + 'SELECCIONAR' + '</a>' + '</td>' +
                                    '</tr>');
                            });
                        }
                        $('#listaclientes').DataTable();
                        $("#buscarcliente").modal('show');
                        conteo_terceros++;
                    }
                });
            }
        });

    </script>
    <script>
        $('body').on('click', '[data-action]', function () {
           var accion = $(this).data('action');
           if (accion == 'listaproducto') {
               $.ajax({
                  type: "POST",
                  url: './controlador/buscar_producto.php',
                   datatype: 'json',
                   success: function (data){
                        var json = JSON.parse(data);

                        if (conteo_producto == 1) {
                            $.each(json, function (index, values) {
                                $("#productos").append('<tr>' +
                                    '<td>' + json[index].codigo_pk + '</td>' +
                                    '<td>' + json[index].descripcion + '</td>' +
                                    '<td>' + json[index].precio + '</td>' +
                                    '<td>' + json[index].impuesto_fk + '</td>' +
                                    '<td>' + json[index].impuesto_fk + '</td>' +
                                    '<td>' + '<a class="btn btn-primary">' + 'SELECCIONAR' + '</a>' + '</td>' +
                                    '</tr>');
                            });
                        }

                       $('#listaproductos').DataTable();
                       $("#buscarproducto").modal('show');
                       conteo_producto++;

                   }
               });
            }
        });
    </script>

</section>
