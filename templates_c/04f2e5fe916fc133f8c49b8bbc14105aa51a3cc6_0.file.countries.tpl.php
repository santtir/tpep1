<?php
/* Smarty version 3.1.39, created on 2021-10-14 18:52:11
  from 'C:\xampp\htdocs\Web2tpe\tpep1\templates\countries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168603b920831_99581893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f2e5fe916fc133f8c49b8bbc14105aa51a3cc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2tpe\\tpep1\\templates\\countries.tpl',
      1 => 1634230123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168603b920831_99581893 (Smarty_Internal_Template $_smarty_tpl) {
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
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>


    <div class="form-group">
  
    <form action="detallar" method="POST" class="my-4">
        <label>Elija un pais y vea los equipos campeones</label>
        <select name="countriesbyteams" class="form-control">
            <option selected>-Elija un pais-</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrie');
$_smarty_tpl->tpl_vars['countrie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countrie']->value) {
$_smarty_tpl->tpl_vars['countrie']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['countrie']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['countrie']->value->pais;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        </div>
        <button type="submit" class="btn btn-dark mt-2" href='sendTeam'>Enviar</button>
    </form>
</div>


                   

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
