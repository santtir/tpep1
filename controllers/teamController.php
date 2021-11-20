<?php

require_once("models/teamModel.php");
require_once("views/teamView.php");
require_once("helpers/authHelpers.php");
require_once("models/userModel.php");
class teamController
{

    private $model;
    private $view;
    private $userModel;
    private $authHelper;

    public function __construct()
    {
        $this->model = new teamModel();
        $this->view = new teamView();
        $this -> authHelper = new  AuthHelper ();
        $this->userModel=new userModel();

    }

    public function showCountries()
    {
        $countrie = $this->model->getAllCountries();    
        $this->view->showAllCountries($countrie);
    }

    public function showTeams()
    {
        $countrie = $this->model->getAllCountries();
        $teams = $this->model->getAllTeams();
        $this->view->showAllTeams($countrie, $teams);
    }

    public function showTeamsByContries()
    {
        if (!empty($_REQUEST['countriesbyteams'])) {
            $id_team=$_REQUEST['countriesbyteams'];
            $teams = $this->model->getTeamsbyCountries($id_team);
            $this->view->showAllTeamsCountrie($teams); 
        } else {
            $this->view->showError();
        }
             
    }

    
    public function showAdmin()
    {   $this -> authHelper -> checkLoggedIn ();
        $admin=$this -> authHelper -> checkRol();
        if($admin==true){
            $countrie = $this->model->getAllCountries();
            $teams = $this->model->getAllTeams();
            $this->view->showAdministrator($countrie, $teams);
        }else if($admin==false){
            $this->view->showAdmError("Este usuario no tiene permisos de administrador");
        }
    }

    public function addCountries()
    {

        if (!empty($_REQUEST['countrie'])) {
            $countrie = $_REQUEST['countrie'];
            $this->model->insertCountries($countrie);

            header("Location: " . administrator);
        } else {
            $this->view->showError();
        }
    }

    public function deleteCountries($id)
    {
        $teams = $this->model->getTeamsbyCountries($id);
        if(!empty($teams)){
            $this->view->showCategoryError();
        }else{
            $this->model->delCountries($id);

            header("Location: " . administrator);
        }
       
    }

    public function UpdateCountrie()
    {
        if (!empty($_POST["selectCountries"])  && !empty($_POST["countrie"])) {
            $id = $_REQUEST['selectCountries'];
            $countrie = $_REQUEST['countrie'];
            $this->model->updateCountrie($id,$countrie);
            header("Location: " . administrator);
            
        } else {
            $this->view->showError();
        }
    }

    public function addTeams()
    {
        if (
            !empty($_POST["team"])  && !empty($_POST["liberty"]) &&
            !empty($_POST["southAmerica"]) && !empty($_POST["countries"])
        ) {
            $team = $_REQUEST['team'];
            $liberty = $_REQUEST['liberty'];
            $southAmerica = $_REQUEST['southAmerica'];
            $id_countrie = $_REQUEST['countries'];

            $this->model->InsertTeams($team, $liberty, $southAmerica, $id_countrie);

            header("Location: " . administrator);
        } else {
            $this->view->showError();
        }
    }

    public function deleteTeams($id)
    {
        $this->model->delTeams($id);

        header("Location: " . administrator);
    }

    public function confirmTeam()
    {
        if (
            !empty($_POST["selectTeams"])  && !empty($_POST["team"])  && !empty($_POST["liberty"]) &&
            !empty($_POST["southAmerica"]) && !empty($_POST["countries"])
        ) {
            $id = $_REQUEST['selectTeams'];
            $team = $_REQUEST['team'];
            $liberty = $_REQUEST['liberty'];
            $southAmerica = $_REQUEST['southAmerica'];
            $id_countrie = $_REQUEST['countries'];

            $this->model->updateTeam($id, $team, $liberty, $southAmerica, $id_countrie);

            header("Location: " . administrator);
        } else {
            $this->view->showError();
        }
    }
}
