<?php

class Model
{
    /**
     * @var null Data access object
     */
    public $dao = null;

    /**
     * @param object $db A PDO database connection
     */
    function __construct()
    {
        require APP . 'dao/dao.php';
        $this->dao = new Dao();
    }
    
    public function getAllUsers()
    {
        return $this->dao->get([], "allUsers");
    }

    public function createUser($email, $username, $password, $firstname, $lastname) {
        $parameters = [
            ":email" => $email,
            ":username" => $username,
            ":password" => $password,
            ":firstname" => $firstname,
            ":lastname" => $lastname,
        ];
        $this->dao->create($parameters, "user");
    }

    public function deleteUser($user_id)
    {
        $parameters = [
            ":user_id" => $user_id,
        ];
        $this->dao->delete($parameters, "user");

    }

    public function getAllProducts($searchinput)
    {
        $parameters = [
            $searchinput => $_POST["searchinput"],
        ];
        return $this->dao->get($parameters, "allProducts");
    }
}
