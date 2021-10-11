{include file='templates/header.tpl'}

<div class="container">
        
    <h3 class=" text-decoration-underline text-center text-capitalize" >{$titulo} </h3>

    <ul class="list-group">
            {foreach from=$teams item=$team }
            <li  class='list-group-item'>{$team->nombre_equipo} </li>
            {/foreach}
    </ul>
</div>

{include file='templates/footer.tpl'}
