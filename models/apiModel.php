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

    function getAllTeams(){
        $query=$this->db->prepare('SELECT * FROM teams');
        $query->execute();

        $team=$query->fetchAll(PDO::FETCH_OBJ);

        return $team;
    }

}