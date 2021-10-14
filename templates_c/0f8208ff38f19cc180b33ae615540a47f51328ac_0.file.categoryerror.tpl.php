<?php
/* Smarty version 3.1.39, created on 2021-10-14 20:21:34
  from 'C:\xampp\htdocs\Web2tpe\tpep1\templates\categoryerror.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168752e38a479_57460224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f8208ff38f19cc180b33ae615540a47f51328ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2tpe\\tpep1\\templates\\categoryerror.tpl',
      1 => 1634235690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168752e38a479_57460224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        
    <h3   class="  text-center text-capitalize"><?php echo $_smarty_tpl->tpl_vars['Error']->value;?>
</h3>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
