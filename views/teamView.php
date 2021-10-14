<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class teamView{

    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
   
    function showAllCountries($countries){
        $this->smarty->assign('titulo','Paises Sudamericanos Consagrados ');
        $this->smarty->assign('countries', $countries);
        $this->smarty->display('templates/countries.tpl');
    }

    function showAllTeams($countries,$teams){
        $this->smarty->assign('countries', $countries);
        $this->smarty->assign('titulo','Historia de los equipos');
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/teams.tpl');

    }

    function showAllTeamsCountrie($teams){
        $this->smarty->assign('titulo','Estos Son Los Equipos');
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/TeamAndCountries.tpl');
    }

    function showAdministrator($countries,$teams){
        $this->smarty->assign('titulo','Administrador');
        $this->smarty->assign('countries',$countries);
        $this->smarty->assign('teams',$teams);
        $this->smarty->display('templates/administrator.tpl');
    }

    function showError(){
        $this->smarty->assign('Error','!!!Error verifique que los campos esten completos¡¡¡');
        $this->smarty->display('templates/error.tpl');
    }

    function editTeams($id){
        $this->smarty->assign('id',$id);
        $this->smarty->display('templates/editbyteam.tpl');
    }
}