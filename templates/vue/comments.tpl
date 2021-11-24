{literal}
    <div id="app">
        <h3>{{ titulo }} </h3>
        
        <ul id="coments-list" class="list-group">
            <li v-for="coment in comentarios" class="list-group-item d-flex">
            {{coment.email}}: <br> {{coment.comentario}} <br> valoracion: {{coment.valoracion}} puntos <br> Al equipo: {{coment.nombre_equipo}} 
                <div class="acciones ms-auto">
                    <a class="btn btn-sm btn-danger" v-bind:data-id="coment.id">Borrar</a>
                </div>
            </li> 
    
            
        </ul>
    </div>
    {/literal}
    