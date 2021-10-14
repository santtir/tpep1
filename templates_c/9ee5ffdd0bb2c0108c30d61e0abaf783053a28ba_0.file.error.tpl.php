<?php
/* Smarty version 3.1.39, created on 2021-10-11 20:57:24
  from '/opt/lampp/htdocs/web2/tpep1-master/templates/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61648914efc9c8_43938980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee5ffdd0bb2c0108c30d61e0abaf783053a28ba' => 
    array (
      0 => '/opt/lampp/htdocs/web2/tpep1-master/templates/error.tpl',
      1 => 1633912881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61648914efc9c8_43938980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        
    <h3 class="text-capitalize" ><?php echo $_smarty_tpl->tpl_vars['Error']->value;?>
</h3>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
