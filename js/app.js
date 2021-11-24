"use strict"

const API_URL="api/comments/";

let app= new Vue({
    el:"#app",
    data:{
        titulo: "Comentarios",
        comentarios:[],
    }
})

let form = document.querySelector("form");
form.addEventListener('submit', addComment);



async function getComments(){
    try{
        let response=await fetch (API_URL);
        let nComentarios=await response.json();

        app.comentarios=nComentarios;

    }catch(e){
        console.log(e);
    }
}





async function addComment(e) {
    e.preventDefault();

    let data = new FormData(form);
    let comment = {
        comentario: data.get('comentario'),
        valoracion: data.get('qualify'),
    }

    try {
        console.log(comment);
        
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
        }

    } catch(e) {
        console.log("error");
    }
}

getComments();