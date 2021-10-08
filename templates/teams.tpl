{include file='templates/header.tpl'}

<div class="container">
   
    <h3 class="text-center text-capitalize text-decoration-underline" >{$titulo} </h3>

   <table class="table table-dark">
    
  <thead>
    <tr>
      <th scope="col">Equipo</th>
      <th scope="col">Libertadores</th>
      <th scope="col">Sudamericanas</th>
    </tr>
  </thead>
  {foreach from=$teams item=$team }
  <tbody>
    <tr>
          <td>{$team->nombre_equipo}</td>
          <td>{$team->cantidad_libertadores}</td>
          <td>{$team->cantidad_sudamericana}</td>
     {/foreach}
    </tr>
  </tbody>
</table>

</div>

{include file='templates/footer.tpl'}