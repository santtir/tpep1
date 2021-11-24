<?php
class apiModel{
    private $db;
    
        function __construct(){        
           $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_equipos;charset=utf8', 'root', '');
        }

    function postComment($comentario,$valoracion,$id_user,$id_team){

        $query=$this->db->prepare('INSERT INTO comments (comentario,valoracion,id_user,id_team) VALUES (?,?,?,?)');
        $query->execute([$comentario,$valoracion,$id_user,$id_team]);

        return $this->db->lastInsertId();
    }

    function getAllComments(){
        $query=$this->db->prepare('SELECT c.comentario, c.valoracion, t.nombre_equipo, u.email FROM comments AS c INNER JOIN teams AS t ON c.id_team= t.id INNER JOIN users AS u ON c.id_user= u.id');
        $query->execute();

        $team=$query->fetchAll(PDO::FETCH_OBJ);

        return $team;
    }

    function getComment($id){
        $query=$this->db->prepare('SELECT * FROM comments WHERE id=?');
        $query->execute([$id]);

        $comment=$query->fetch(PDO::FETCH_OBJ);

        return $comment;
    }

    function deleteComment($id){
        $query=$this->db->prepare('DELETE FROM comments WHERE id=?');
        $query->execute([$id]);
    }

}