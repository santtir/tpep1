<?php
/* Smarty version 3.1.39, created on 2021-10-08 21:57:25
  from 'C:\xampp\htdocs\tpep1_\tpep1-master\templates\cup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160a2a59098a9_38000246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb0b4afca78aaad6e09b8814333ca5299c2e5e9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpep1_\\tpep1-master\\templates\\cup.tpl',
      1 => 1633722769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6160a2a59098a9_38000246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        
    <h1 class="text-center text-capitalize" ><?php echo $_smarty_tpl->tpl_vars['cups']->value->nombre_equipo;?>
 </h1>

    <ul class="list-group">

        <li  class='list-group-item'>Cantidad De Libertadores: <?php echo $_smarty_tpl->tpl_vars['cups']->value->cantidad_libertadores;?>
</li> 
        <li  class='list-group-item'>Cantidad De Sudamericas: <?php echo $_smarty_tpl->tpl_vars['cups']->value->cantidad_sudamericanas;?>
</li>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
