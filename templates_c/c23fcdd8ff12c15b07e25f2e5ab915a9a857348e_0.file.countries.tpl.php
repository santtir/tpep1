<?php
/* Smarty version 3.1.39, created on 2021-10-11 20:49:59
  from '/opt/lampp/htdocs/web2/tpep1-master/templates/countries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616487574fa0f0_07482582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c23fcdd8ff12c15b07e25f2e5ab915a9a857348e' => 
    array (
      0 => '/opt/lampp/htdocs/web2/tpep1-master/templates/countries.tpl',
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
function content_616487574fa0f0_07482582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        
    <h3 class=" text-decoration-underline text-center text-capitalize" ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h3>

    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrie');
$_smarty_tpl->tpl_vars['countrie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countrie']->value) {
$_smarty_tpl->tpl_vars['countrie']->do_else = false;
?>
            <li  class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['countrie']->value->pais;?>
<a href="detallar/<?php echo $_smarty_tpl->tpl_vars['countrie']->value->id;?>
" class="btn btn-dark btn-sm">Mostrar</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
