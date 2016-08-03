<?php
if(!isset($_SESSION)) {
    session_start();
}

/**
 * Class useraccount
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Useraccount extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views

        $categories = $this->model->getProductCategory();
        $user_id =  $_SESSION['loggedInUser_id'];
        

        if (isset($_SESSION['loggedInUser_id'])) {

            $user = $this->model->getUserInfo($user_id);
            $userproducts = $this->model->getUserProdcuts($user_id);
            
        }
            require APP . 'view/_templates/header.php';
            require APP . 'view/useraccount/index.php';
            require APP . 'view/_templates/footer.php';

        
        
    }
    
}