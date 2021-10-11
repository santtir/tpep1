{include file='templates/header.tpl'}

<div class="container">
        
    <h1 class="text-center text-capitalize" >{$cups->nombre_equipo} </h1>

    <ul class="list-group">

        <li  class='list-group-item'>Cantidad De Libertadores: {$cups->cantidad_libertadores}</li> 
        <li  class='list-group-item'>Cantidad De Sudamericas: {$cups->cantidad_sudamericanas}</li>
    </ul>
</div>

{include file='templates/footer.tpl'}