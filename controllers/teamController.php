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

    public function addCountries(){
        $countrie = $_REQUEST['countrie'];

        $this->model->insertCountries($countrie);

        header("Location: " . administrator);
    }

    public function deleteCountries($id){
        $this->model->delCountries($id);

        header("Location: " . administrator);
    }

    public function editByCountries($id){

        
    }

    public function addTeams(){
        if (isset($_POST["team"])  || isset($_POST["liberty"]) ||
            isset($_POST["southAmerica"]) || isset($_POST["countries"]) ) {
            $team = $_REQUEST['team'];
            $liberty = $_REQUEST['liberty'];
            $southAmerica = $_REQUEST['southAmerica'];
            $id_countrie = $_REQUEST['countries'];

            $this->model->InsertTeams($team,$liberty,$southAmerica,$id_countrie);

            header("Location: " . administrator);

        }else{
            $this->view->showError();
        }
    }

    public function deleteTeams($id){
        $this->model->delTeams($id);

        header("Location: " . administrator);
    }

    public function editByTeams($id){
        $this->view->editTeams($id);
    }

    public function confirmTeam($id){

       
        $team = $_REQUEST['team'];
        $liberty = $_REQUEST['liberty'];
        $southAmerica = $_REQUEST['southAmerica'];
        $id_countrie = $_REQUEST['countries'];

        $this->model->updateTeam($team,$liberty,$southAmerica,$id_countrie,$id);

        header("Location: " . administrator);

        
    }
}
