{include file='templates/header.tpl'}
<div class="container">
    <div class="col order-1">
        <h4 class="text-capitalize"></h4>
        <form action="confirmTeam/{$id}" method="POST" class="my-4">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label class="text-uppercase">Equipo</label>
                        <input name="team" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label class="text-uppercase">Libertadores</label>
                        <input name="liberty" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label class="text-uppercase">Sudamericanas</label>
                        <input name="southAmerica" type="number" class="form-control">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Pais Del Equipo</label>
                <select name="countries" class="form-control">
                    <option selected>Paises</option>
                    <option value="1">Argentina</option>
                    <option value="2">Brasil</option>
                    <option value="3">Uruguay</option>
                    <option value="4">Paraguay</option>
                    <option value="5">Ecuador</option>
                    <option value="6">Colombia</option>
                    <option value="7">Chile</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-dark mt-2" href='sendTeam'>Enviar</button>
        </form>
    </div>
</div>
{include file='templates/footer.tpl'}