<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class teamView{

    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
   

    function showAllCountries($countries){

        $this->smarty->assign('titulo','Seleccione el pais del cual quiere ver los campeones');
        $this->smarty->assign('countries', $countries);
        $this->smarty->display('templates/countries.tpl');

    }

    function showAllTeams($teams){
        
        $this->smarty->assign('titulo','Historia de los equipos');
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/teams.tpl');

    }

    function showAllTeamsCountrie($teams){

        $this->smarty->assign('titulo','Estos Son Los Equipos');
        $this->smarty->assign('teams', $teams);
        $this->smarty->display('templates/TeamAndCountries.tpl');

    }

    function showCupsTeams($cups){
    
        $this->smarty->assign('cups', $cups);
        $this->smarty->display('templates/cup.tpl');

    }
}