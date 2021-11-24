{include file='templates/header.tpl'}

<div class="container">
{foreach from=$teams item=$team }
   
                <h3 class=" text-decoration-underline text-center text-capitalize">Historia de "{$team->equipo}" </h3>
                

                <ul class="list-group">
            
                    <li class="list-group-item" >Cantidad De Libertadores: "{$team->libertadores}"</li>
                    <li class="list-group-item" >Cantidad De Sudamericanas: "{$team->sudamericana}"</li>
                    <li class="list-group-item" >Pais: "{$team->pais}"</li>
          
                </ul>
                 <div class="container-comments">
                <!-- hueco para CSR -->
                {include file="vue/comments.tpl"}
                </div>


        <div class="mb-3">
         
            </div>
            <form method="POST" action="coment">
                <h4 class=" text-decoration-underline  text-capitalize">Agregue un Comentario</h4>
                <div class="form-floating">
                    <textarea name="comentario"  class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
                <div class="mb-3">
                </div>
                <h4 class=" text-decoration-underline  text-capitalize">Califique la historia de {$team->equipo}</h4>
            
                <select  name="qualify" class="form-select" aria-label="Default select example">
                    <option selected>Califique la historia de {$team->equipo}</option>
                    <option value="1">1 Puntos</option>
                    <option value="2">2 Puntos</option>
                    <option value="3">3 Puntos</option>
                    <option value="4">4 Puntos</option>
                    <option value="5">5 Puntos</option>

                </select>
               <div class="mb-3">
                </div>
                <div class="form-check">
                <p>El comentario que usted suba, no podra ser eliminado si no es un Administrador.¿Esta seguro de querer hacer el comentario?</p>
                    <input name="id_team" class="form-check-input" type="checkbox" value="{$team->id}" id="check">
                    <label class="form-check-label" for="flexCheckDefault">
                        Estoy de Acuerdo
                    </label>
                </div>
                <button type="submit" class="btn btn-dark mt-2">Enviar</button>
            </form>
       
        {/foreach}
</div>  
     <script src="js/app.js"></script>

<footer>

    {include file='templates/footer.tpl'}

</footer>