{include file='templates/header.tpl'}

<div class="container">
        
    <h3 class=" text-decoration-underline text-center text-capitalize" >{$titulo} </h3>

    <ul class="list-group">
        {foreach from=$countries item=$countrie }
            <li  class="list-group-item">{$countrie->pais}<a href="detallar/{$countrie->id}" class="btn btn-dark btn-sm">Mostrar</a></li>
        {/foreach}
    </ul>
</div>

{include file='templates/footer.tpl'}
