{literal}
    <div id="app">
        <h3>{{ titulo }} </h3>

        <ul id="coments-list" class="list-group">
            <li v-for="coment in comentarios" class="list-group-item d-flex">
                {{coment.email}}: <br> {{coment.comentario}} <br> valoracion: {{coment.valoracion}} puntos
                <div class="acciones ms-auto">
                    <button class="btn btn-sm btn-danger" v-on:click="deleteComment" v-bind:data-id="coment.id"
                        v-if="rol=='admin'">Borrar</button>
                </div>
            </li>
        </ul>
        <button v-on:click="orderAsc">Ordenar las valoraciones</button>
    </div>
{/literal}