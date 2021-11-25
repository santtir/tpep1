{include file='templates/header.tpl'}
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<div class="container">
    {foreach from=$teams item=$team }

        <h3 class=" text-decoration-underline text-center text-capitalize">Historia de "{$team->equipo}" </h3>


        <ul class="list-group">

            <li class="list-group-item">Cantidad De Libertadores: "{$team->libertadores}"</li>
            <li class="list-group-item">Cantidad De Sudamericanas: "{$team->sudamericana}"</li>
            <li class="list-group-item">Pais: "{$team->pais}"</li>

        </ul>
        <div class="container-comments">
            <!-- hueco para CSR -->
            {include file="vue/comments.tpl"}
        </div>

        
        {if !isset($smarty.session.USER_ID)}

            <div class="mb-3">

                <form method="POST" action="coment">
                    <h4 class=" text-decoration-underline  text-capitalize">Agregue un Comentario</h4>
                    <p>ATENCION! para agregar comentarios debe estar registrado</p>
                    <div class="form-floating">
                        <textarea disabled name="comentario" class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <div class="mb-3">
                    </div>
                    <h4 class=" text-decoration-underline  text-capitalize">Califique la historia de {$team->equipo}</h4>

                    <select disabled name="qualify" class="form-select" aria-label="Default select example">
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
                        <input id="id-team" type="hidden" value="{$team->id_team}">

                    </div>
                    <button v-on:click="addComment" class="btn btn-dark mt-2">Enviar</button>
                </form>
            </div>
            {else}
                <div class="mb-3">

                <form id="formulario-comment" method="POST" action="coment">
                    <h4 class=" text-decoration-underline  text-capitalize">Agregue un Comentario</h4>
                    <div class="form-floating">
                        <textarea name="comentario" class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <div class="mb-3">
                    </div>
                    <h4 class=" text-decoration-underline  text-capitalize">Califique la historia de {$team->equipo}</h4>

                    <select name="qualify" class="form-select" aria-label="Default select example">
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
                        <input id="id-team" type="hidden" value="{$team->id_team}">

                    </div>
                    <button v-on:click="addComment" type="submit" class="btn btn-dark mt-2">Enviar</button>
                </form>
            </div>
        {/if}

    {/foreach}
</div>

<script src="js/app.js"></script>


<footer>

    {include file='templates/footer.tpl'}

</footer>