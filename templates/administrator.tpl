{include file='templates/header.tpl'}

<div class="container">

    <h3 class=" text-decoration-underline text-center text-capitalize" >{$titulo}</h2>

    <h4 class="text-capitalize">Agregar una nueva categoria</h4>
    <div class="row align-items-center">
        
        <form action="insertCountrie" method="POST" class="my-4">
             <div class="row">
                <div class="col-9">
                    <div class="form-group">
                         <label class="text-uppercase">Pais</label>
                         <input maxlength="100" name="countrie" type="text" class="form-control">
                    </div>
                 </div>
            </div>
            <button type="submit" class="btn btn-dark mt-2"  href='sendCountrie'>Enviar</button>
        </form>
        <h4 class="text-capitalize">Editar categoria</h4>
         <form action="editCountrie" method="POST" class="my-4">
         <div class="form-group">
                        <label>Pais Del Equipo</label>
                        <select name="selectCountries" class="form-control">
                        <option selected>Paises</option>
                        {foreach from=$countries item=$countrie}
                              <option value="{$countrie->id}">{$countrie->pais}</option>
                        {/foreach}
                      
                        </select>
        </div>
             <div class="row">
                <div class="col-9">
                    <div class="form-group">
                         <label class="text-uppercase">Pais</label>
                         <input maxlength="100" name="countrie" type="text" class="form-control" >
                    </div>
                 </div>
            </div>
            <button type="submit" class="btn btn-dark mt-2"  href='sendCountrie'>Enviar</button>
        </form>
        
        
        <div class="col order-1">
            <h4 class="text-capitalize">Agregar un nuevo Item</h4>
            <form action="insertTeam" method="POST" class="my-4">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label class="text-uppercase">Equipo</label>
                            <input  maxlength="100" name="team" type="text" class="form-control">
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
                        {foreach from=$countries item=$countrie}
                              <option value="{$countrie->id}">{$countrie->pais}</option>
                        {/foreach}
                      
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
                        <option selected>Equipos</option>
                        {foreach from=$teams item=$team}
                              <option value="{$team->id}">{$team->nombre_equipo}</option>
                        {/foreach}
                      
                        </select>
            </div>
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label class="text-uppercase">Equipo</label>
                            <input  maxlength="100" name="team" type="text" class="form-control">
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
                        {foreach from=$countries item=$countrie}
                              <option value="{$countrie->id}">{$countrie->pais}</option>
                        {/foreach}
                      
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
                    <td><a class="btn btn-danger" href="deleteCountrie/{$countrie->id}">Borrar</a></td>
                    <td><a class="btn btn-secondary" href="editCountrie/{$countrie->id}">Editar</a></td>
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
                <th scope="col">Pais</th>
                <th scope="col">Equipo</th>
                <th scope="col">Libertadores</th>
                <th scope="col">Sudamericanas</th>
                <th scope="col">Borrar</th>
                </tr>
            </thead>
             
            <tbody>
            {foreach from=$countries item=$countrie }
                {foreach from=$teams item=$team }
                <tr>
                    {if $countrie->id == $team->id_pais}
                    <td>{$countrie->pais }
                    <td>{$team->nombre_equipo}</td>
                    <td>{$team->cantidad_libertadores}</td>
                    <td>{$team->cantidad_sudamericana}</td>
                    <td><a class="btn btn-danger" href="deleteTeam/{$team->id}">Borrar</a></td>
                   
                    {/if}
                    
                {/foreach}
            {/foreach}
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
  


   
</div>
{include file='templates/footer.tpl'}
