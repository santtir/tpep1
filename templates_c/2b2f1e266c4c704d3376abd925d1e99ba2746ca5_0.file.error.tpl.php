<?php
/* Smarty version 3.1.39, created on 2021-10-11 00:54:30
  from 'C:\xampp\htdocs\tpep1_\tpep1-master\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61636f266cf674_39829884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b2f1e266c4c704d3376abd925d1e99ba2746ca5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpep1_\\tpep1-master\\templates\\error.tpl',
      1 => 1633892330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61636f266cf674_39829884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        
    <h3 class="text-capitalize" ><?php echo $_smarty_tpl->tpl_vars['Error']->value;?>
</h3>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
