{include file='templates/header.tpl'}

<div class="container">

    <h3 class=" text-decoration-underline text-center text-capitalize" >{$titulo}</h2>

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
            {foreach from=$countries item=$countrie }
            <tbody>
                <tr>
                    <td>{$countrie->pais}</td>
                    <td><a class="btn btn-danger" href="delete/{$countrie->id}">Borrar</a></td>
                    <td><a class="btn btn-secondary" href="edit/{$countrie->id}">Editar</a></td>
                {/foreach}
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
            {foreach from=$teams item=$team }
            <tbody>
                <tr>
                    <td>{$team->nombre_equipo}</td>
                    <td>{$team->cantidad_libertadores}</td>
                    <td>{$team->cantidad_sudamericana}</td>
                    <td><a class="btn btn-danger" href="delete/{$team->id}">Borrar</a></td>
                    <td><a class="btn btn-secondary" href="edit/{$team->id}">Editar</a></td>
                {/foreach}
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
  


   
</div>
{include file='templates/footer.tpl'}
