{include file='templates/header.tpl'}

<div class="container">

    <h3 class=" text-decoration-underline text-center text-capitalize">{$titulo} </h3>

    <ul class="list-group">
        {foreach from=$countries item=$countrie }
            <li class="list-group-item">{$countrie->pais}</li>
        {/foreach}
    </ul>


    <div class="form-group">

        <form action="detallar" method="POST" class="my-4">
            <label>Elija un pais y vea los equipos campeones</label>
            <select name="countriesbyteams" class="form-control">
                <option selected>-Elija un pais-</option>
                {foreach from=$countries item=$countrie}
                    <option value="{$countrie->id}">{$countrie->pais}</option>
                {/foreach}
            </select>
    </div>
    <button type="submit" class="btn btn-dark mt-2" href='sendTeam'>Enviar</button>
    </form>
</div>




{include file='templates/footer.tpl'}