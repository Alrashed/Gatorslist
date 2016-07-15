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

    public function createUser($email, $username, $password) {
        $parameters = [
            ":email" => $email,
            ":username" => $username,
            ":password" => $password,
        ];
        $this->dao->create($parameters, "user");
    }

//    public function deleteUser($user_id)
//    {
//        $sql = "DELETE FROM user WHERE User_id = :user_id";
//        $query = $this->db->prepare($sql);
//        $parameters = array(':user_id' => $user_id);
//
//        // useful for debugging: you can see the SQL behind above construction by using:
//        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
//
//        $query->execute($parameters);
//
//    }
//
//    public function getAllProducts($searchinput)
//    {
//        $sql = "SELECT * FROM product WHERE Title LIKE '%" . $searchinput . "%' or Description LIKE '%" . $searchinput . "%'";
//        $query = $this->db->prepare($sql);
//        $query->execute();
//
//        return $query->fetchAll();
//    }
}
