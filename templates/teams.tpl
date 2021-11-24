{include file='templates/header.tpl'}

<div class="container">    
     <h3 class=" text-decoration-underline text-center text-capitalize">{$titulo} </h3>
    
    <p>Seleccione un equipo y vea su historia copera</p>
    <form action="equipmentDetail" method="POST" class="my-4">
        <div class="form-group">
                            <label>Elija un Equipo</label>
                            <select name="teams" class="form-control">
                                <option selected>-Elija un equipo-</option>
                                {foreach from=$teams item=$team }
                                    <option value="{$team->id}">{$team->nombre_equipo}</option>
                                {/foreach}

                            </select>
        </div>
        <button type="submit" class="btn btn-dark mt-2" href='sendTeam'>Enviar</button>
    </form>   
</div>  
 
<footer>

    {include file='templates/footer.tpl'}

</footer>