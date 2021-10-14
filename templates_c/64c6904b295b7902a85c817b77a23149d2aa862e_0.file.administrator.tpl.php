<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:23:09
  from 'C:\xampp\htdocs\Web2tpe\tpep1\templates\administrator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168677d7f0185_22064031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c6904b295b7902a85c817b77a23149d2aa862e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2tpe\\tpep1\\templates\\administrator.tpl',
      1 => 1634232167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168677d7f0185_22064031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <h3 class=" text-decoration-underline text-center text-capitalize"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

        <h4 class="text-capitalize">Agregar un nuevo pais</h4>
        <div class="row align-items-center">

            <form action="insertCountrie" method="POST" class="my-4">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label class="text-uppercase">Pais</label>
                            <input maxlength="100" name="countrie" type="text" class="form-control"  placeholder="Ingrese el nombre del Pais">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark mt-2" href='sendCountrie'>Enviar</button>
            </form>
            <h4 class="text-capitalize">Editar categoria pais</h4>
            <form action="editCountrie" method="POST" class="my-4">
                <div class="form-group">
                    <label>Pais </label>
                    <select name="selectCountries" class="form-control">
                        <option selected>-Elija el pais-</option>
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
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label class="text-uppercase">Pais</label>
                            <input maxlength="100" name="countrie" type="text" class="form-control" placeholder="Ingrese el nombre del Pais">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark mt-2" href='sendCountrie'>Enviar</button>
            </form>


            <div class="col order-1">
                <h4 class="text-capitalize">Agregar un nuevo equipo</h4>
                <form action="insertTeam" method="POST" class="my-4">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label class="text-uppercase">Equipo</label>
                                <input maxlength="100" name="team" type="text" class="form-control" placeholder="Ingrese el nombre del Equipo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label class="text-uppercase">Libertadores</label>
                                <input name="liberty" type="number" class="form-control" placeholder="Ingrese la cantidad de Libertadores ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label class="text-uppercase">Sudamericanas</label>
                                <input name="southAmerica" type="number" class="form-control" placeholder="Ingrese la cantidad de Sudamericanas ">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pais Del Equipo</label>
                        <select name="countries" class="form-control">
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
            <div class="col order-1">
                <h4 class="text-capitalize">Editar un equipo</h4>
                <form action="editTeam" method="POST" class="my-4">
                    <div class="form-group">
                        <label>¿Que equipo desea editar?</label>
                        <select name="selectTeams" class="form-control">
                            <option selected>-Elija un equipo-</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value->nombre_equipo;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label class="text-uppercase">Equipo</label>
                                <input maxlength="100" name="team" type="text" class="form-control" placeholder="Ingrese el nombre del Equipo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label class="text-uppercase">Libertadores</label>
                                <input name="liberty" type="number" class="form-control" placeholder="Ingrese la cantidad de Libertadores ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label class="text-uppercase">Sudamericanas</label>
                                <input name="southAmerica" type="number" class="form-control" placeholder="Ingrese la cantidad de Sudamericanas ">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pais Del Equipo</label>
                        <select name="countries" class="form-control">
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
        </div>
        <div class="row align-items-center">
            <div class="row">
                <div class="col">
                    <h4 class="text-capitalize text-center">Paises</h4>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Seleccion</th>
                                <th scope="col">Borrar</th>
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
                                    <td><a class="btn btn-danger" href="deleteCountrie/<?php echo $_smarty_tpl->tpl_vars['countrie']->value->id;?>
">Borrar</a></td>
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
                                <th scope="col">Pais</th>
                                <th scope="col">Equipo</th>
                                <th scope="col">Libertadores</th>
                                <th scope="col">Sudamericanas</th>
                                <th scope="col">Borrar</th>
                            </tr>
                        </thead>

                        <tbody>
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
                                    <tr>
                                        <?php if ($_smarty_tpl->tpl_vars['countrie']->value->id == $_smarty_tpl->tpl_vars['team']->value->id_pais) {?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['countrie']->value->pais;?>

                                            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->nombre_equipo;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->cantidad_libertadores;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['team']->value->cantidad_sudamericana;?>
</td>
                                            <td><a class="btn btn-danger" href="deleteTeam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
">Borrar</a></td>

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
            </div>
        </div>




</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
