<?php
/* Smarty version 3.1.39, created on 2021-10-08 22:19:10
  from 'C:\xampp\htdocs\tpep1_\tpep1-master\templates\TeamAndCountries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160a7be49cfa2_58462715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f10e24c9575ee714769e6a945f8a1b10614ef327' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpep1_\\tpep1-master\\templates\\TeamAndCountries.tpl',
      1 => 1633723000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6160a7be49cfa2_58462715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        
    <h3 class=" text-decoration-underline text-center text-capitalize" ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h3>

    <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
            <li  class='list-group-item'><?php echo $_smarty_tpl->tpl_vars['team']->value->nombre_equipo;?>
 </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
