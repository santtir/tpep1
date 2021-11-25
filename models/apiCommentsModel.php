<?php
class ApiCommentsModel{
    private $db;
    
        function __construct(){        
           $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_equipos;charset=utf8', 'root', '');
        }

    function postComment($comentario,$valoracion,$id_user,$id_team){

        $query=$this->db->prepare('INSERT INTO comments (comentario,valoracion,id_user,id_team) VALUES (?,?,?,?)');
        $query->execute([$comentario,$valoracion,$id_user,$id_team]);

        return $this->db->lastInsertId();
    }

    function getAllComments($id_team){
        $query=$this->db->prepare('SELECT comments.* , u.email as email 
        FROM comments 
        INNER JOIN users as u
        ON comments.id_user= u.id  
        WHERE id_team=? ');
        $query->execute([$id_team]);

        $team=$query->fetchAll(PDO::FETCH_OBJ);

        return $team;
    }

    function getComment($id){
        $query=$this->db->prepare('SELECT comments.* , u.email as email 
        FROM comments 
        INNER JOIN users as u
        ON comments.id_user= u.id  
        WHERE comments.id=?');
        $query->execute([$id]);

        $comment=$query->fetch(PDO::FETCH_OBJ);

        return $comment;
    }

    function deleteComment($id){
        $query=$this->db->prepare('DELETE FROM comments WHERE id=?');
        $query->execute([$id]);
    }

    function getCommentsOrderAsc($id_team){
        $query=$this->db->prepare('SELECT comments.* , u.email as email 
        FROM comments 
        INNER JOIN users as u
        ON comments.id_user= u.id  
        WHERE id_team=?
        ORDER BY comments.valoracion ASC');

        $query->execute([$id_team]);

        $team=$query->fetchAll(PDO::FETCH_OBJ);

        return $team;
    }

    function getCommentsByPoints($id_team,$valoracion){
        $query=$this->db->prepare('SELECT comments.* , u.email as email 
        FROM comments 
        INNER JOIN users as u
        ON comments.id_user= u.id  
        WHERE id_team=?
        AND comments.valoracion=?');

        $query->execute([$id_team,$valoracion]);

        $team=$query->fetchAll(PDO::FETCH_OBJ);

        return $team;
    }

}