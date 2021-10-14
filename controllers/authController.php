<?php
require_once("models/userModel.php");
require_once("views/authView.php");
require_once("helpers/authHelpers.php");

class authController{

    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new userModel();
        $this->view = new authView();
        $this->authHelper = new AuthHelper();
    }

    function showLogin()
    {
        $this->view->formLogin();
    }

    public function login()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);

            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {
                // armo la sesion del usuario
                $this->authHelper->login($user);
                header("Location: " . administrator);
            } else {
                $this->view->formLogin("Usuario o contraseña inválida");
            }
        }
    }

    public function logout() {
        $this->authHelper->logout();
    }
}