<?php
/* Smarty version 3.1.39, created on 2021-10-14 15:18:51
  from 'C:\xampp\htdocs\Web2tpe\tpep1\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61682e3b6bfb89_28447099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22d0e18521e94b29cd75b6f349ec9956e6f623ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2tpe\\tpep1\\templates\\error.tpl',
      1 => 1634057105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61682e3b6bfb89_28447099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        
    <h3 class="text-capitalize" ><?php echo $_smarty_tpl->tpl_vars['Error']->value;?>
</h3>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
