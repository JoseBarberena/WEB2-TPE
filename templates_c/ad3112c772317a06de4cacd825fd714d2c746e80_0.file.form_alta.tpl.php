<?php
/* Smarty version 4.3.4, created on 2023-10-16 17:00:37
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d5015304ef6_01050776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad3112c772317a06de4cacd825fd714d2c746e80' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\form_alta.tpl',
      1 => 1697468427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652d5015304ef6_01050776 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
 <div class="dropdown d-flex justify-content-between my-4">
  
 <div>
  
     <form class="row gx-3 gy-2 align-items-center container " action="createSale" method="post">

       <div class="col-sm-3">
         <input type="text" name="cliente" class="form-control" id="specificSizeInputName" placeholder="Cliente" required>
       </div>
       <div class="col-sm-3">
         <input type="text" name="factura" class="form-control" id="specificSizeInputName" placeholder="Factura" required>
       </div>
       <div class="col-sm-3">
         <input type="date" name="fecha" class="form-control" id="specificSizeInputName" placeholder="Fecha" required>
       </div>


       <div class="col-sm-3">
         <label class="visually-hidden" for="specificSizeSelect">Vendedor</label>
        

         <select type="number" class="form-select" id="priority" name="vendedor" value="<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
">
        
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
         <input type="text" name="producto" class="form-control" id="specificSizeInputName" placeholder="Producto" required>
       </div>
       <div class="col-sm-3">
         <input type="number" name="cantidad" class="form-control" id="specificSizeInputName" placeholder="Cantidad" required>
       </div>
       <div class="col-sm-3">
         <input type="number" name="p_unitario" class="form-control" id="specificSizeInputName"
           placeholder="P Unitario" required>
       </div>
       <div class="col-sm-3">
         <input type="number" name="total" class="form-control" id="specificSizeInputName" placeholder="Total" required>
       </div>

       <div class="col-auto">
            <button type="submit" class="btn btn-dark">Submit</button>
          </div>

       <div class="col-auto">
        
       </div>
     </form>

   </div>
   
 </div>
 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSales">Return</a></button>
      <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
      </div>


      <?php }
}
