<?php
/* Smarty version 4.3.4, created on 2023-10-13 00:01:00
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65286c9cc13b92_10108205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48bab2aac763f0cd56bbecb81d8ca6c4686a278d' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\home.tpl',
      1 => 1697147946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65286c9cc13b92_10108205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="d-flex justify-content-center font-monospace"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
