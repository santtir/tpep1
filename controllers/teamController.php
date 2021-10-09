<?php

require_once ("models/teamModel.php");
require_once ("views/teamView.php");

class teamController{

    private $model;
    private $view;

    public function __construct(){

        $this->model=new teamModel();
        $this->view=new teamView();
    }

    public function showCountries(){
        $countrie=$this->model->getAllCountries();
        $this->view->showAllCountries($countrie);
    }

    public function showTeams(){
        $teams=$this->model->getAllTeams();
        $this->view->showAllTeams($teams);
    }

    public function showTeamsByContries($id_team){
        $teams=$this->model->getTeamsbyCountries($id_team);
        $this->view->showAllTeamsCountrie($teams);
    }

    public function showCups($id_cups){
        $cups=$this->model->getCupsTeams($id_cups);
        $this->view->showCupsTeams($cups);
    }

    public function showAdmin(){
        $countrie=$this->model->getAllCountries();
        $teams=$this->model->getAllTeams();
        $this->view->showAdministrator($countrie,$teams);
    }
}
