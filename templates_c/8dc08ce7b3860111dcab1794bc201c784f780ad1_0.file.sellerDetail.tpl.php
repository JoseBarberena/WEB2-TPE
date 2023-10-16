<?php
/* Smarty version 4.3.4, created on 2023-10-17 00:05:29
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\sellerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652db3a9bb6685_73394955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dc08ce7b3860111dcab1794bc201c784f780ad1' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\sellerDetail.tpl',
      1 => 1697492832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652db3a9bb6685_73394955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  
  <h2 class="my-4 d-flex justify-content-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>


  <div class="container">
    <ul class="list-group">
      <li class="list-group-item">ID: <?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
</li>
      <li class="list-group-item">Vendedor: <?php echo $_smarty_tpl->tpl_vars['seller']->value->Vendedor;?>
</li>
      <li class="list-group-item">Zona: <?php echo $_smarty_tpl->tpl_vars['seller']->value->Zona;?>
</li>
      <li class="list-group-item">Comision: <?php echo $_smarty_tpl->tpl_vars['seller']->value->Comision;?>
</li>

    </ul>
  </div>

</div>

<div class="container">
  <div class="container text-center btn-group">
    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
      data-bs-display="static" aria-expanded="false">
      - Actulizar Datos de Vendedores -
    </button>
    <div class="dropdown-menu dropdown-menu-dark dropdown dropdown-menu-end dropdown-menu-lg-start">
      <form class="row gx-3 gy-2 align-items-center container dropdown-menu-end "
        action="updateSeller/<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
" method="post">


               <div class="col-sm-3">
          <label>Seller</label><input type="text" name="Vendedor" value="<?php echo $_smarty_tpl->tpl_vars['seller']->value->Vendedor;?>
" class="form-control"
            id="specificSizeInputName" placeholder="">
        </div>

        <div class="col-sm-3">
          <label>Sales_Area</label><input type="text" name="Zona" value="<?php echo $_smarty_tpl->tpl_vars['seller']->value->Zona;?>
"
            class="form-control" id="specificSizeInputName" placeholder="">
        </div>

        <div class="col-sm-3">
          <label>Sales_Commission</label><input type="double" name="Comision"
            value="<?php echo $_smarty_tpl->tpl_vars['seller']->value->Comision;?>
" class="form-control" id="specificSizeInputName" placeholder="">
        </div>

        <div class="col-auto">
          <button type="submit" class="btn btn-dark">Send</button>
        </div>

      </form>

    </div>
  </div>


</div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSeller">Return</a></button>
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
</div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
