<?php
class userModel{

    private $db;

    function __construct(){        
       $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_equipos;charset=utf8', 'root', '');
    }
    
    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function registerUser($userEmail,$userPassword){

        $rol='user';

        $query=$this->db->prepare('INSERT INTO users (email,password,rol) VALUES (?,?,?)');
        $query->execute([$userEmail,$userPassword,$rol]);

        return $this->db->lastInsertId();
    }

    function getAllUsers(){
        $query=$this->db->prepare('SELECT * FROM users');
        $query->execute();

        $users=$query->fetchAll(PDO::FETCH_OBJ);

        return $users;
    }

    function deleteUser($id_user){
        $query=$this->db->prepare('DELETE FROM users WHERE id=?');
        $query->execute([$id_user]);

    }

    function updateUser($id_user){

        $rol='admin';

        $query=$this->db->prepare('UPDATE users SET rol=? WHERE id=?');
        $query->execute([$rol,$id_user]);
    }

    function updateAdmin($id_user){

        $rol='user';

        $query=$this->db->prepare('UPDATE users SET rol=? WHERE id=?');
        $query->execute([$rol,$id_user]);
    }

    function getAdmin(){

        $query=$this->db->prepare('SELECT * FROM users WHERE rol="admin"');
        $query->execute();

        $admin=$query->fetchAll(PDO::FETCH_OBJ);

        return $admin;
    }

}