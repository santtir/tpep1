<?php
require_once("models/userModel.php");
require_once("views/authView.php");
require_once("helpers/authHelpers.php");

class authController
{

    private $userModel;
    private $authView;
    private $authHelper;

    function __construct()
    {
        $this->userModel = new userModel();
        $this->authView = new authView();
        $this->authHelper = new AuthHelper();
    }

    function showLogin()
    {
        $this->authView->formLogin();
    }

    public function login()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Obtengo el usuario de la base de datos
            $user = $this->userModel->getUser($email);

            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {
                if ($user->rol == 'admin') {
                    // armo la sesion del usuario
                    $this->authHelper->login($user);
                    header("Location: " . administrator);
                } else {
                    $this->authHelper->login($user);
                    header("Location: " . BASE_URL);
                }
            } else {
                $this->authView->formLogin("Usuario o contraseña inválida");
            }
        }
    }

    public function logout()
    {
        $this->authHelper->logout();
    }

    public function registerUser()
    {
        if (!empty($_POST['userEmail']) && !empty($_POST['userPassword'])) {
            $userEmail = $_POST['userEmail'];
            $userPassword = password_hash($_POST['userPassword'], PASSWORD_BCRYPT);

            //verifico que no haya otro usuario con el mismo email
            $users = $this->userModel->getUser($userEmail);

            if (empty($users)) {
                $this->userModel->registerUser($userEmail, $userPassword);

                $this->loginNewUser($userEmail, $userPassword);
                
            } else {
                $this->authView->formRegister("El email ingresado ya existe");
            }
        }
    }

    public function showRegisterForm()
    {
        $this->authView->formRegister();
    }

    public function loginNewUser($email, $password)
    {
        
        if (!empty($_POST['userEmail']) && !empty($_POST['userPassword'])) {
            $email = $_POST['userEmail'];
            $password = $_POST['userPassword'];
            
            $user = $this->userModel->getUser($email);

            if ($user && password_verify($password, $user->password)) {
                $this->authHelper->login($user);
                header("Location: " . BASE_URL);
            }
        }
    }

    public function deleteUser($id){
        $rol=$this->authHelper->checkRol();
        if($rol==true){
            $this->userModel->deleteUser($id);
            header("Location: " . administrator);

        }else{
            $this->view->showAdmError("Este usuario no tiene permisos de administrador");
        }

    }

    public function updateUser($id_user){

        $rol=$this->authHelper->checkRol();
        if($rol==true){
            $this->userModel->updateUser($id_user);
            header("Location: " . administrator);

        }else{
            $this->view->showAdmError("Este usuario no tiene permisos de administrador");
        }
    }

    public function updateAdmin($id_user){

        $rol=$this->authHelper->checkRol();
        if($rol==true){
            $this->userModel->updateAdmin($id_user);
            header("Location: " . administrator);

        }else{
            $this->view->showAdmError("Este usuario no tiene permisos de administrador");
        }
    }
}
