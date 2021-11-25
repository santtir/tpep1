<?php

require_once 'models/apiCommentsModel.php';
require_once 'views/apiView.php';
require_once 'helpers/authHelpers.php';

class ApiCommentsController
{

    private $ApiCommentsModel;
    private $apiView;



    function __construct()
    {
        $this->ApiCommentsModel = new ApiCommentsModel();
        $this->apiView = new apiView();
    }


    function getBody()
    {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    function postComment($params = null)
    {


        $data = $this->getBody();


        $id_user = $data->id_user;
        $comentario = $data->comentario;
        $valoracion = $data->valoracion;
        $id_team = $data->id_team;
        if (isset($comentario) && !empty($comentario)) {
            $id = $this->ApiCommentsModel->postComment($comentario, $valoracion, $id_user, $id_team);

            $comentarios = $this->ApiCommentsModel->getComment($id);

            if ($comentarios) {
                $this->apiView->response($comentarios, 200);
            } else {
                $this->apiView->response("hubo un error al intentar agregar el comentario", 500);
            }
        }
    }

    public function showComments($params = null)
    {
        if (isset($params[':ID_TEAM']) && !empty($params[':ID_TEAM'])) {
            $id_team = $params[':ID_TEAM'];
            $teams = $this->ApiCommentsModel->getAllComments($id_team);
            $this->apiView->response($teams, 200);
        } else {
            $this->apiView->response("error", 404);
        }
    }

    public function deleteComment($params = null)
    {

        $id_comment = $params[':ID'];
        $comentario = $this->ApiCommentsModel->getComment($id_comment);

        if (!empty($comentario)) {
            $this->ApiCommentsModel->deleteComment($id_comment);
            $this->apiView->response("eliminado con exito", 200);
        } else {
            $this->apiView->response("error al eliminar comentario", 404);
        }
    }

    public function showCommentsOrderAsc($params = null)
    {
        if (isset($params[':ID_TEAM']) && !empty($params[':ID_TEAM'])) {
            $id_team = $params[':ID_TEAM'];
            $teams = $this->ApiCommentsModel->getCommentsOrderAsc($id_team);
            $this->apiView->response($teams, 200);
        } else {
            $this->apiView->response("error", 404);
        }
    }
}
