"use strict"

const API_URL = "api/comments/";

let app = new Vue({
    el: "#app",
    data: {
        titulo: "Comentarios",
        comentarios: [],
        rol: document.querySelector("#rol").value,
    },
    methods: {
        addComment: addComment,
        deleteComment: deleteComment,
        orderAsc: orderAsc,
    },
})

let form = document.querySelector("form");
form.addEventListener('submit', addComment);

let idTeam = document.querySelector("#id-team").value;



async function getComments() {
    try {
        let response = await fetch(API_URL + "teams/" + idTeam);
        let nComentarios = await response.json();
        app.comentarios = nComentarios;
    } catch (e) {
        console.log(e);
    }
}


async function addComment(e) {
    let user = document.querySelector("#id_user");

    e.preventDefault();

    let idUser = user.getAttribute("data-id");

    let data = new FormData(form);
    let comment = {
        id_user: idUser,
        comentario: data.get('comentario'),
        valoracion: data.get('qualify'),
        id_team: idTeam,
    }

    try {
        let response = await fetch(API_URL, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(comment),
        });

        if (response.ok) {
            let comment = await response.json();
            app.comentarios.push(comment);
            form.reset();
        }

    } catch (e) {
        alert('ERROR! campos vacios');
        console.log("error");
    }
}
async function deleteComment(e) {
    let id = e.target.getAttribute('data-id');

    try {
        let res = await fetch(API_URL + '/' + id, {
            "method": "DELETE"
        }); if (res.ok) {
            for (let i = 0; i < app.comentarios.length; i++) {
                if (app.comentarios[i].id == id) {
                    app.comentarios.splice(i, 1)
                }
            };
            console.log("Eliminado con exito");

        }
        else {
            console.log("Hubo un problema al eliminar");
        }

    } catch (e) {
        console.log(e);
    }
}

async function orderAsc() {
    try {
        let response = await fetch(API_URL + "orderAsc/teams/" + idTeam);
        let nComentarios = await response.json();
        app.comentarios = nComentarios;
    } catch (e) {
        console.log(e);
    }
}


getComments();