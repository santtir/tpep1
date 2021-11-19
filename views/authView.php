<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class authView{
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function formLogin($error = null){ 
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');

    }

    function formRegister($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/registerUser.tpl');
    }
}