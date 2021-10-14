<?php

class teamModel{
    private $db;

    function __construct(){
            
       $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_equipos;charset=utf8', 'root', '');

    }

    function getAllCountries(){
        $query=$this->db->prepare('SELECT * FROM countries');
        $query->execute();

        $countrie=$query->fetchAll(PDO::FETCH_OBJ);

        return $countrie;
        
    }
    function getAllTeams(){
        $query=$this->db->prepare('SELECT * FROM teams');
        $query->execute();

        $team=$query->fetchAll(PDO::FETCH_OBJ);

        return $team;

    }

    function getTeamsbyCountries($id_countrie){
        $query=$this->db->prepare('SELECT * FROM teams JOIN countries ON teams.id_pais=? =countries.id');
        $query->execute([$id_countrie]);

        $teambycount=$query->fetchAll(PDO::FETCH_OBJ);

        return $teambycount;
    }

    function getCupsTeams($id_cups){
        $query=$this->db->prepare('SELECT * FROM teams WHERE id=?');
        $query->execute([$id_cups]);

        $cups=$query->fetchAll(PDO::FETCH_OBJ);

        return $cups;
    }

    function insertCountries($countrie){
        $query=$this->db->prepare('INSERT INTO countries (pais) VALUES (?)');
        $query->execute([$countrie]);

        return $this->db->lastInsertId();
    }

    function delCountries($id){
        $query=$this->db->prepare('DELETE FROM countries WHERE id=?');
        $query->execute([$id]);
    }

    function updateCountrie($id,$countrie){
        $query=$this->db->prepare('UPDATE countries SET pais=? WHERE id=?');
        $query->execute([$countrie,$id]);
    }

    function InsertTeams($name,$liberty,$southAmerica,$id_countrie){
        $query=$this->db->prepare('INSERT INTO teams (nombre_equipo, cantidad_libertadores, cantidad_sudamericana, id_pais) VALUES (?,?,?,?)');
        $query->execute([$name,$liberty,$southAmerica,$id_countrie]);

        return $this->db->lastInsertId();
    }

    function delTeams($id){
        $query=$this->db->prepare('DELETE FROM teams WHERE id=?');
        $query->execute([$id]);
    }

    function updateTeam($id,$team,$liberty,$southAmerica,$id_countrie){
        $query=$this->db->prepare('UPDATE teams SET nombre_equipo= ?, cantidad_libertadores=?, cantidad_sudamericana=?, id_pais=? WHERE id=?');
        $query->execute([$team,$liberty,$southAmerica,$id_countrie,$id]);
    }
}
