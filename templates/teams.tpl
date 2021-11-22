{include file='templates/header.tpl'}

<div class="container">
    {if $history }
    {foreach from=$teams item=$team }
                <h3 class=" text-decoration-underline text-center text-capitalize">Historia de "{$team->equipo}" </h3>
                

                <ul class="list-group">
            
                    <li class="list-group-item" >Cantidad De Libertadores: "{$team->libertadores}"</li>
                    <li class="list-group-item" >Cantidad De Sudamericanas: "{$team->sudamericana}"</li>
                    <li class="list-group-item" >Pais: "{$team->pais}"</li>
          
            </ul>

        <div class="mb-3">
        </div>
        <form method="POST" action="coment">
            <h4 class=" text-decoration-underline  text-capitalize">Agregue un Comentario</h4>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <div class="mb-3">
            </div>
            <h4 class=" text-decoration-underline  text-capitalize">Califique la historia de {$team->equipo}</h4>
        
            <select  name="qualify" class="form-select" aria-label="Default select example">
                <option selected>Califique la historia de {$team->equipo}</option>
                <option value="1">1 Punto</option>
                <option value="2">2 Puntos</option>
                <option value="3">3 Puntos</option>
                <option value="5">4 Puntos</option>
                <option value="5">5 Puntos</option>

            </select>
               <button type="submit" class="btn btn-dark mt-2">Enviar</button>
        </form>
      {/foreach}
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