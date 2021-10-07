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
    //sin usar
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
}
