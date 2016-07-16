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
        return $this->dao->get([], "allUser");
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
        $sql = "SELECT * FROM product WHERE Title LIKE '%" . $searchinput . "%' or Description LIKE '%" . $searchinput . "%'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
    public function searchProducts($searchinput, $category)
    {
       if($category == "") {
           $parameters = [
               ":searchinput" => $searchinput,
           ];
           $this->dao->get($parameters, "searchbyKeyword");
       } else {
           $parameters = [
               ":searchinput" => $searchinput,
               ":category" => $category,
           ];

           $this->dao->get($parameters, "searchbyCategory");
       }
       
//        $sql = "SELECT * FROM product WHERE Title LIKE '%" . $searchinput . "%' or Description LIKE '%" . $searchinput . "%'";
//        $query = $this->db->prepare($sql);
//        $query->execute();
//
//        return $query->fetchAll();
    }
}
