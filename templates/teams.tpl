{include file='templates/header.tpl'}

<div class="container">
   
    <h3 class="text-center text-capitalize text-decoration-underline" >{$titulo} </h3>

   <table class="table table-dark">
    
  <thead>
    <tr>
      <th scope="col">Pais</th>
      <th scope="col">Equipo</th>
      <th scope="col">Libertadores</th>
      <th scope="col">Sudamericanas</th>
    </tr>
  </thead>
  {foreach from=$countries item=$countrie }
     {foreach from=$teams item=$team }
  <tbody>
    <tr>  {if $countrie->id == $team->id_pais}
          <td>{$countrie->pais }
          <td>{$team->nombre_equipo}</td>
          <td>{$team->cantidad_libertadores}</td>
          <td>{$team->cantidad_sudamericana}</td>
          {/if}
     {/foreach}
  {/foreach}
    </tr>
  </tbody>
</table>

</div>

{include file='templates/footer.tpl'}