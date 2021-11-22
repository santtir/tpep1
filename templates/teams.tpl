{include file='templates/header.tpl'}

<div class="container">
    {if $history }
    {foreach from=$teams item=$team }
                <h3 class=" text-decoration-underline text-center text-capitalize">Historia de "{$team->equipo}" </h3>
                

                <ul class="list-group">
            
                    <li class="list-group-item" >Cantidad De Libertadores: "{$team->libertadores}"</li>
                    <li class="list-group-item" >Cantidad De Sudamericanas: "{$team->sudamericana}"</li>
                    <li class="list-group-item" >Pais: "{$team->pais}"</li>
            {/foreach}
            </ul>
        {else}
        
     <h3 class=" text-decoration-underline text-center text-capitalize">{$titulo} </h3>
    
    <p>Seleccione un equipo y vea su historia copera</p>
    <form action="equipmentDetail" method="POST" class="my-4">
        <div class="form-group">
                            <label>Pais Del Equipo</label>
                            <select name="teams" class="form-control">
                                <option selected>-Elija un equipo-</option>
                                {foreach from=$teams item=$team }
                                    <option value="{$team->id}">{$team->nombre_equipo}</option>
                                {/foreach}

                            </select>
        </div>
        <button type="submit" class="btn btn-dark mt-2" href='sendTeam'>Enviar</button>
    </form>
         
        
    {/if}
     
</div>  
   
<footer>

    {include file='templates/footer.tpl'}

</footer>