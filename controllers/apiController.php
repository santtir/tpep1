<?php

require_once 'models/apiModel.php';
require_once 'views/apiView.php';


class ApiController{

    private $apiModel;
    private $view;
    private $userModel;

    function __construct()
    {
        $this->apiModel=new apiModel();
        $this->view=new apiView();
    }


    function getBody(){
        $data=file_get_contents("php://input");
        return json_decode($data);
    }

    function postComment($params=null){
        $data=$this->getBody();

        $comentario=$data->comentario;
        $valoracion=$data->valoracion;
        $id_user=$data->id_user;
        $id_team=$data->id_team;
        
        $id=$this->apiModel->postComment($comentario,$valoracion,$id_user,$id_team);

        var_dump($id);
        $comentarios=$this->apiModel->getComment($id);

        if($comentarios){
            $this->view->response("el comentario fue agregado correctamente", 200);
        }else{
            $this->view->response("hubo un error al intentar agregar el comentario", 500);
        }

    }

    public function showComments()
    {

        $teams = $this->apiModel->getAllComments();
    

        return $this->view->response($teams,200);
        
    }

    public function deleteComment($params=null){

        $id_comment=$params[':ID'];
        $comentario=$this->apiModel->getComment($id_comment);

        if(!empty($comentario)){
            $this->apiModel->deleteComment($id_comment);
            $this->view->response("eliminado con exito",200);

        }else{
            $this->view->response("error al eliminar comentario",404);
        }
    }
}