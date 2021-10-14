<?php
/* Smarty version 3.1.39, created on 2021-10-11 00:29:40
  from 'C:\xampp\htdocs\tpep1_\tpep1-master\templates\teams.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163695410b121_69334647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2eacee57d7a8d2aae3a6ee608a4add93596b44f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpep1_\\tpep1-master\\templates\\teams.tpl',
      1 => 1633904968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6163695410b121_69334647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
   
    <h3 class="text-center text-capitalize text-decoration-underline" ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h3>

   <table class="table table-dark">
    
  <thead>
    <tr>
      <th scope="col">Pais</th>
      <th scope="col">Equipo</th>
      <th scope="col">Libertadores</th>
      <th scope="col">Sudamericanas</th>
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrie');
$_smarty_tpl->tpl_vars['countrie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countrie']->value) {
$_smarty_tpl->tpl_vars['countrie']->do_else = false;
?>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
  <tbody>
    <tr>  <?php if ($_smarty_tpl->tpl_vars['countrie']->value->id == $_smarty_tpl->tpl_vars['team']->value->id_pais) {?>
          <td><?php echo $_smarty_tpl->tpl_vars['countrie']->value->pais;?>

          <td><?php echo $_smarty_tpl->tpl_vars['team']->value->nombre_equipo;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['team']->value->cantidad_libertadores;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['team']->value->cantidad_sudamericana;?>
</td>
          <?php }?>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
  </tbody>
</table>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
