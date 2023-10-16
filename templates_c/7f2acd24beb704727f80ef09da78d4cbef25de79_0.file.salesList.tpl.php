<?php
/* Smarty version 4.3.4, created on 2023-10-16 19:03:43
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\salesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d6cefbac824_05677525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f2acd24beb704727f80ef09da78d4cbef25de79' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\salesList.tpl',
      1 => 1697475818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652d6cefbac824_05677525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>




 
 <h2 class="my-4 d-flex justify-content-center"><?php echo $_smarty_tpl->tpl_vars['titulo2']->value;?>
</h2>
 <table class="table">
   <thead>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Cliente</th>
       <th scope="col">Comprobante N°</th>
       <th scope="col">Fecha</th>
       <th scope="col">Vendedor</th>
       <th scope="col">Producto</th>
       <th scope="col">Cantidad</th>
       <th scope="col">Pcio U</th>
       <th scope="col">Total</th>
       <th scope="col">Delete</th>
       <th scope="col">Update</th>
     </tr>
   </thead>
   <tbody>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales']->value, 'sale');
$_smarty_tpl->tpl_vars['sale']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sale']->value) {
$_smarty_tpl->tpl_vars['sale']->do_else = false;
?>
       <tr>
         <td><a href="saleDetail/<?php echo $_smarty_tpl->tpl_vars['sale']->value->id;?>
" class="btn btn-outline-success btn-sm"><?php echo $_smarty_tpl->tpl_vars['sale']->value->id;?>

             - Display</a></td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Cliente;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Factura;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Fecha;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->id_vendedor;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Producto;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Cantidad;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->P_Unitario;?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['sale']->value->Total;?>
</td>
         <td><a href="deleteSale/<?php echo $_smarty_tpl->tpl_vars['sale']->value->id;?>
" class="btn btn-outline-danger btn-sm">Delete</a></td>
         <td><a href="saleDetail/<?php echo $_smarty_tpl->tpl_vars['sale']->value->id;?>
" class="btn btn-outline-success btn-sm">Display/Update</a>
         </td>
       </tr>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </tbody>
 </table>

 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSales">back to top /
       return</a></button>
   <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
 </div>
</div>





 
 <div class="dropdown d-flex justify-content-between my-4">
  
 <div>
   <button class="btn btn-secondary btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown"
     aria-expanded="false">
     - Agregar Venta -
   </button>
   <div class="dropdown-menu dropdown-menu-dark ">

     <form class="row gx-3 gy-2 align-items-center container " action="createSale" method="post">

       <div class="col-sm-3">
         <input type="text" name="cliente" class="form-control" id="specificSizeInputName" placeholder="Cliente">
       </div>
       <div class="col-sm-3">
         <input type="text" name="factura" class="form-control" id="specificSizeInputName" placeholder="Factura">
       </div>
       <div class="col-sm-3">
         <input type="date" name="fecha" class="form-control" id="specificSizeInputName" placeholder="Fecha">
       </div>
       <div class="col-sm-3">
         <label class="visually-hidden" for="specificSizeSelect">Vendedor</label>
         <select type="number" class="form-select" id="priority" name="vendedor" value="<?php echo $_smarty_tpl->tpl_vars['sale']->value->Vendedor;?>
">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellers']->value, 'seller');
$_smarty_tpl->tpl_vars['seller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seller']->value) {
$_smarty_tpl->tpl_vars['seller']->do_else = false;
?>
             <option value='<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
'><?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
 -  <?php echo $_smarty_tpl->tpl_vars['seller']->value->Vendedor;?>
</option>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </select>
       </div>
       <div class="col-sm-3">
         <input type="text" name="producto" class="form-control" id="specificSizeInputName" placeholder="Producto">
       </div>
       <div class="col-sm-3">
         <input type="number" name="cantidad" class="form-control" id="specificSizeInputName" placeholder="Cantidad">
       </div>
       <div class="col-sm-3">
         <input type="number" name="p_unitario" class="form-control" id="specificSizeInputName"
           placeholder="P Unitario">
       </div>
       <div class="col-sm-3">
         <input type="number" name="total" class="form-control" id="specificSizeInputName" placeholder="Total">
       </div>

       <div class="col-auto">
         <button type="submit" class="btn btn-dark">Submit</button>
       </div>
     </form>

   </div>
 </div>



  
  <div class="dropdown dropstart">
  <button class="btn btn-secondary btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown"
    aria-expanded="false">

    - Filtro por Vendedor -
  </button>
  <div class="dropdown-menu dropdown-menu-dark ">
  
    <form action="sellerfilter/<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
" method="post">

      <div class="col-sm-3 input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect02">Opciones</label>
        <select type="number" class="form-select" id="priority" name="seller" value=""
          placeholder="Elija un Vendedor">
          <option selected>Elegir...</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellers']->value, 'seller');
$_smarty_tpl->tpl_vars['seller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seller']->value) {
$_smarty_tpl->tpl_vars['seller']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
"><?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
 - <?php echo $_smarty_tpl->tpl_vars['seller']->value->Vendedor;?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-dark">Select</button>
      </div>
    </form>
  </div>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
