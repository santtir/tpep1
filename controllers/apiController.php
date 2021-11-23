<?php

class apiController{

    private $apiModel;
    private $view;
    private $userModel;

    function __construct()
    {
        $this->model=new apiModel();
        $this->view=new apiView();
        $this->data = file_get_contents("php://input");
    }

    function getData(){
        return json_decode($this->data);
    }

    function getBody(){
        $data=file_get_contents("php://input");
        return json_decode($data);
    }

    function postComment($params=null){
        $data=$this->getBody();

        $comment=$data->comentario;
        $valoracion=$data->valoracion;
        $id_user=$data->id_user;
        $id_team=$data->id_team;

        $comments=$this->apiModel->postComment($comment,$valoracion,$id_user,$id_team);

        if($comments){
            $this->view->response("el coemntario fue agregado correctamente", 200);
        }else{
            $this->view->response("hubo un error al intentar agregar el comentario", 500);
        }

    }

    public function showTeams()
    {
        $teams = $this->apiModel->getAllTeams();

        return $this->view->response($teams,200);
        
    }
}