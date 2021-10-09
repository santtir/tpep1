<?php
/* Smarty version 3.1.39, created on 2021-10-09 21:19:08
  from 'C:\xampp\htdocs\tpep1_\tpep1-master\templates\administrator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6161eb2c177461_33197169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d04f8f411e93f6db97286dfc9ffb53efe0061cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpep1_\\tpep1-master\\templates\\administrator.tpl',
      1 => 1633807130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6161eb2c177461_33197169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <h3 class=" text-decoration-underline text-center text-capitalize" ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

    <h4 class="text-capitalize">Agregar una nueva categoria</h4>
    <div class="row align-items-center">
        <form action="insertar" method="POST" class="my-4">
             <div class="row">
                <div class="col-9">
                    <div class="form-group">
                         <label class="text-uppercase">Pais</label>
                         <input name="countrie" type="text" class="form-control">
                    </div>
                 </div>
            </div>
            <button type="submit" class="btn btn-dark mt-2"  href='sendCountrie'>Enviar</button>
        </form>
        <div class="col order-1">
            <h4 class="text-capitalize">Agregar un nuevo equipo</h4>
            <form action="insertar" method="POST" class="my-4">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label class="text-uppercase">Equipo</label>
                            <input name="countrie" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label class="text-uppercase">Libertadores</label>
                            <input name="libertadores" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label class="text-uppercase">Sudamericanas</label>
                            <input name="sudamericanas" type="number" class="form-control">
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
    <div class="row align-items-center">
        <div class="row">
            <div class="col">
            <h4 class="text-capitalize text-center">Selecciones</h4>
            <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Seleccion</th>
                <th scope="col">Borrar</th>
                <th scope="col">Editar</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrie');
$_smarty_tpl->tpl_vars['countrie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countrie']->value) {
$_smarty_tpl->tpl_vars['countrie']->do_else = false;
?>
            <tbody>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['countrie']->value->pais;?>
</td>
                    <td><a class="btn btn-danger" href="delete/<?php echo $_smarty_tpl->tpl_vars['countrie']->value->id;?>
">Borrar</a></td>
                    <td><a class="btn btn-secondary" href="edit/<?php echo $_smarty_tpl->tpl_vars['countrie']->value->id;?>
">Editar</a></td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </tbody>
            </table>
            </div>
     

        <div class="col order-1">
            <h4 class="text-capitalize text-center">Equipos</h4>
            <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Equipo</th>
                <th scope="col">Libertadores</th>
                <th scope="col">Sudamericanas</th>
                <th scope="col">Borrar</th>
                <th scope="col">Editar</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
            <tbody>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['team']->value->nombre_equipo;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['team']->value->cantidad_libertadores;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['team']->value->cantidad_sudamericana;?>
</td>
                    <td><a class="btn btn-danger" href="delete/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
">Borrar</a></td>
                    <td><a class="btn btn-secondary" href="edit/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
">Editar</a></td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
  


   
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
