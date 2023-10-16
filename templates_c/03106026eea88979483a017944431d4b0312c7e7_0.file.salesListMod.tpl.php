<?php
/* Smarty version 4.3.4, created on 2023-10-16 16:53:59
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\salesListMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d4e871c3811_36388531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03106026eea88979483a017944431d4b0312c7e7' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\salesListMod.tpl',
      1 => 1697468034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d4e871c3811_36388531 (Smarty_Internal_Template $_smarty_tpl) {
?>

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


</div>

<?php }
}
