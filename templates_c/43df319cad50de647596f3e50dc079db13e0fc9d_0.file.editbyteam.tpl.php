<?php
/* Smarty version 3.1.39, created on 2021-10-10 22:01:59
  from 'C:\xampp\htdocs\tpep1_\tpep1-master\templates\editbyteam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616346b74984c6_52785526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43df319cad50de647596f3e50dc079db13e0fc9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpep1_\\tpep1-master\\templates\\editbyteam.tpl',
      1 => 1633896108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616346b74984c6_52785526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="col order-1">
        <h4 class="text-capitalize"></h4>
        <form action="confirmTeam/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST" class="my-4">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label class="text-uppercase">Equipo</label>
                        <input name="team" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label class="text-uppercase">Libertadores</label>
                        <input name="liberty" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label class="text-uppercase">Sudamericanas</label>
                        <input name="southAmerica" type="number" class="form-control">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Pais Del Equipo</label>
                <select name="countries" class="form-control">
                    <option selected>Paises</option>
                    <option value="1">Argentina</option>
                    <option value="2">Brasil</option>
                    <option value="3">Uruguay</option>
                    <option value="4">Paraguay</option>
                    <option value="5">Ecuador</option>
                    <option value="6">Colombia</option>
                    <option value="7">Chile</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-dark mt-2" href='sendTeam'>Enviar</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
