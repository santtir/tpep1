<?php
class AuthHelper {
    function __construct() {
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function login($user) {
        $_SESSION['USER_ID'] = $user->id;
        $_SESSION['USER_EMAIL'] = $user->email;
        $_SESSION['ROL']=$user->rol;
    }

    
    public function checkLoggedIn() {
        if (empty($_SESSION['USER_ID']) ) {
            
            header("Location: " . LOGIN);
            die();
        }
    }

    public function obtenerId(){
       $user= $_SESSION['USER_ID'];
       return $user;
    }

    public function checkRol(){
        if(!empty($_SESSION['ROL'])){
            
            switch($_SESSION['ROL']){
                case'admin':
                    return true;
                break;
                case'user':
                   return false;
                break;
                default:
                die();
            }

        }
    }

    function logout() {
        session_destroy();
        header("Location: " . BASE_URL);
    } 

}