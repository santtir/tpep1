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
        $countrie=$this->model->getAllCountries();
        $teams=$this->model->getAllTeams();

        $this->view->showAllTeams($countrie,$teams);
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
        if( !isset( $_REQUEST['countrie'])){
            $countrie = $_REQUEST['countrie'];

            $this->model->insertCountries($countrie);
    
            header("Location: " . administrator);
        }else{
            $this->view->showError();
        }
    }

    public function deleteCountries($id){
        $this->model->delCountries($id);

        header("Location: " . administrator);
    }

    public function UpdateCountrie(){
        if(isset($_POST["selectCountries"])  || !isset($_POST["countrie"])){
            $id = $_REQUEST['selectCountries'];
            $countrie = $_REQUEST['countrie'];

            $this->model->updateCountrie($id,$countrie);
            header("Location: " . administrator);
        }else{
            $this->view->showError();
        }

    }

    public function addTeams(){
        if (!isset($_POST["team"])  || !isset($_POST["liberty"]) ||
            !isset($_POST["southAmerica"]) || !isset($_POST["countries"]) ) {
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

    public function confirmTeam(){
        if (isset($_POST["selectTeams"])  || !isset($_POST["team"])  || !isset($_POST["liberty"]) ||
        !isset($_POST["southAmerica"]) || !isset($_POST["countries"]) ){
            $id = $_REQUEST['selectTeams'];
            $team = $_REQUEST['team'];
            $liberty = $_REQUEST['liberty'];
            $southAmerica = $_REQUEST['southAmerica'];
            $id_countrie = $_REQUEST['countries'];
    
            $this->model->updateTeam($id,$team,$liberty,$southAmerica,$id_countrie);
    
            header("Location: " . administrator);
        }
        else{
            $this->view->showError();
        }
       
       

        
    }
}
