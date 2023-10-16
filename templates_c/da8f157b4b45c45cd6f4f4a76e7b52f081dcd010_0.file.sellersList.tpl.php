<?php
/* Smarty version 4.3.4, created on 2023-10-16 20:47:29
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\sellersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d85410f2df7_29431782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da8f157b4b45c45cd6f4f4a76e7b52f081dcd010' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\sellersList.tpl',
      1 => 1697482043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652d85410f2df7_29431782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

  <h4 class="mt-2"><?php echo $_smarty_tpl->tpl_vars['titulo1']->value;?>
</h4>


  <div class="dropdown dropend">
    <button class="btn btn-secondary btn-lg dropdown-toggle dropend" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    - Agregar Vendedor -
    </button>
    <div class="dropdown-menu dropdown-menu-dark dropend">
      <form class="row gx-3 gy-2 align-items-center container " action="createSeller" method="post">
        <div class="col-sm-3">
          <input type="text" name="Vendedor" class="form-control" id="specificSizeInputName" placeholder="Vendedor">
        </div>
        <div class="col-sm-3">
          <input type="text" name="Zona" class="form-control" id="specificSizeInputName" placeholder=" Zona">
        </div>
        <div class="col-sm-3">
          <input type="double" name="Comision" class="form-control" id="specificSizeInputName" placeholder=" Comision">
        </div>


        <div class="col-auto">
          <button type="submit" class="btn btn-dark">Agregar</button>
        </div>
      </form>

    </div>
  </div>

  

  <h1 class="my-4 d-flex justify-content-center"><?php echo $_smarty_tpl->tpl_vars['titulo2']->value;?>
</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Vendedor</th>
        <th scope="col">Zona</th>
        <th scope="col">Comision por Ventas</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellers']->value, 'seller');
$_smarty_tpl->tpl_vars['seller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seller']->value) {
$_smarty_tpl->tpl_vars['seller']->do_else = false;
?>
        <tr>
          <td><a href="sellerDetail/<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
" class="btn btn-outline-success btn-sm"><?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['seller']->value->Vendedor;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['seller']->value->Zona;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['seller']->value->Comision;?>
</td>
          
          <td><a href="deleteSeller/<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
" class="btn btn-outline-danger btn-sm">Delete</a></td>
          <td><a href="sellerDetail/<?php echo $_smarty_tpl->tpl_vars['seller']->value->id_Vendedor;?>
" class="btn btn-outline-success btn-sm">Display/Update</a></td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSeller">On the top</a></button>
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
