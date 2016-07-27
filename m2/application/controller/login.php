<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php

/**
 * Class login
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Login extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://../login/index
     */
    public function index()
    {
        // getting all users
        $users = $this->model->getAllUsers();

        // load views. within the views we can echo out $users
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function loginUser() {
        
        if (isset($_POST["loginuser"])) {
//            $email = $_POST["email"];
//            $password = $_POST["password"];
//            $salt = "saltedpass4team4";
//            $saltedpassword = md5($salt . $password);
            
            $this->model->loginUser($_POST["email"],  $_POST["password"]);
            
            echo $this->Email;
            echo "adadaw";
            
            if ($this->Email == $email) {
                $_SESSION['CurrentUser'] = $this->User_id;  // create session for user             
                header('location: ' . URL . 'home');   
            } 
        }
    }
    /**
     * ACTION: signUp
     * This method handles what happens when you move to http://../login/login
     */
	

}
