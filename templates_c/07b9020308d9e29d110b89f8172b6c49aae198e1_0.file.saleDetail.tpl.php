<?php
/* Smarty version 4.3.4, created on 2023-10-16 17:51:17
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\saleDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d5bf50c2820_57867572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07b9020308d9e29d110b89f8172b6c49aae198e1' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\saleDetail.tpl',
      1 => 1697471470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652d5bf50c2820_57867572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <h1 class="my-4 d-flex justify-content-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Cliente</th>
                <th scope="col"> Producto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Cliente;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Producto;?>
</td>
            </tr>
        </tbody>
    </table>


    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Factura: <?php echo $_smarty_tpl->tpl_vars['sale']->value->Factura;?>
</li>
            <li class="list-group-item">Fecha: <?php echo $_smarty_tpl->tpl_vars['sale']->value->Fecha;?>
</li>
            <li class="list-group-item">Vendedor: <?php echo $_smarty_tpl->tpl_vars['sale']->value->id_vendedor;?>
</li>
            <li class="list-group-item">Cantidad: <?php echo $_smarty_tpl->tpl_vars['sale']->value->Cantidad;?>
</li>
            <li class="list-group-item">Pcio U: <?php echo $_smarty_tpl->tpl_vars['sale']->value->P_Unitario;?>
</li>
            <li class="list-group-item">Total: <?php echo $_smarty_tpl->tpl_vars['sale']->value->Total;?>
</li>
        </ul>

    </div>

<div class="
container text-center btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
        - Actualizar Operacion -
        </button>
        <div class="dropdown-menu dropdown-menu-dark dropdown dropdown-menu-end dropdown-menu-lg-start">Select the field to change and update it 
          <form class="row gx-3 gy-2 align-items-center container dropdown-menu-end " action="updateSale/<?php echo $_smarty_tpl->tpl_vars['sale']->value->id;?>
" method="post">
            <div class="col-sm-3">
    
              
            <label>Cliente</label><input type="text" name="cliente" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Cliente;?>
" class="form-control" id="specificSizeInputName" placeholder="Cliente">
            </div>
            <div class="col-sm-3">
            <label>Factura</label><input type="text" name="factura" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Factura;?>
" class="form-control" id="specificSizeInputName" placeholder="Factura">
            </div>
            <div class="col-sm-3">
            <label>Fecha</label><input type="date" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Fecha;?>
" class="form-control" id="specificSizeInputName" placeholder="Fecha">
            </div>


            <div class="col-sm-3">
              <label  for="specificSizeSelect">Perro</label>
              <select type="number" class="form-select" id="priority" name="vendedor" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Vendedor;?>
" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellers']->value, 'seller');
$_smarty_tpl->tpl_vars['seller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seller']->value) {
$_smarty_tpl->tpl_vars['seller']->do_else = false;
?>
                         <option value='<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
'><?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
 - <?php echo $_smarty_tpl->tpl_vars['seller']->value->Vendedor;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

              </select>
            </div>


            <div class="col-sm-3">
            <label>Producto</label><input type="text" name="producto" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Producto;?>
" class="form-control" id="specificSizeInputName" placeholder="Product">
            </div>
            <div class="col-sm-3">
            <label>Cantidad</label><input type="number" name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Cantidad;?>
" class="form-control" id="specificSizeInputName" placeholder="Quantity">
            </div>
            <div class="col-sm-3">
            <label>P Unitario</label><input type="number" name="p_unitario" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->P_Unitario;?>
" class="form-control" id="specificSizeInputName"
                placeholder="Unit_Price">
            </div>
            <div class="col-sm-3">
            <label>Total</label><input type="number" name="total" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Cantidad;?>
" id="specificSizeInputName" placeholder="Amount">
            </div>
    
            <div class="col-auto">
              <button type="submit" class="btn btn-dark">EDIT</button>
            </div>
          </form>
    
        </div>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSales">Return</a></button>
      <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
      </div>
  

</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
