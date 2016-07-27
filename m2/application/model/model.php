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

    //register controller
    //get info of all user
    public function getAllUsers()
    {
        return $this->dao->get([], "allUsers");
    }

    //add a user
    public function createUser($email, $password, $firstname, $lastname) {
        $parameters = [
            ":email" => $email,
            ":password" => $password,
            ":firstname" => $firstname,
            ":lastname" => $lastname,
        ];
        $this->dao->create($parameters, "user");
    }

    //delete user
    public function deleteUser($user_id)
    {
        $parameters = [
            ":user_id" => $user_id,
        ];
        $this->dao->delete($parameters, "user");

    }

    //product controller
    //search product, return product summary include image thumbnail.
    public function getAllProducts($searchinput, $category)
    {
        if($category == "") {
            $parameters = [
                ":searchinput" => $searchinput,
            ];
            return $this->dao->get($parameters, "allProducts");
        } else {
            $parameters = [
                ":searchinput" => $searchinput,
                ":category" => $category,
            ];
            return $this->dao->get($parameters, "ProductsByCategory");
        }
        
    }

    //item controller
    // add product with images
    public function createItem($seller_id, $title, $description, $price, $condition, $date, $category_Id,$image1,$image2, $image3,$image4) {
        echo "model good";
        $parameters = [
            ":seller_id" => $seller_id,
            ":title" => $title,
            ":description" => $description,
            ":price" => $price,
            ":condition" => $condition,
            ":date" =>$date,
            ":category_Id" =>$category_Id,
            ":image1" => $image1,
            ":image2" => $image2,
            ":image3" => $image3,
            ":image4" => $image4,
        ];
        $this->dao->create($parameters, "item");
    }

    //edit product price
    public function editItem($product_id, $newprice) {
        $parameters = [
            ":product_id" => $product_id,
            ":newprice" => $newprice,
        ];
        $this->dao->update($parameters, "resetprice");
    }

    //delete a product
    public function deleteItem($product_id) {
        $parameters = [
            ":product_id" => $product_id,
        ];
        $this->dao->delete($parameters, "item");
    }

    //get an item with full description include image
    public function getItem($product_id) {
        $parameters = [
            ":product_id" => $product_id,
        ];
        $this->dao->get($parameters, "item");
    }

    //order controller
    //purchase function, create an order, change order status to in process
    public function createOrder($product_id, $buyer_id, $date, $detail, $status) {
        $parameters = [
            ":product_id" => $product_id,
            ":buyer_id" => $buyer_id,
            ":date" => $date,
            ":status" => $status,
            ":detail" => $detail,
        ];
        $this->dao->create($parameters, "order");
    }

    //edit order status, buyer or seller can change order status to received or cancelled
    public function editStatus($order_id, $status) {
        $parameters = [
            ":order_id" => $order_id,
            ":status" => $status,
        ];
        $this->dao->update($parameters, "editStatus");
    }

    //get order, buyer or seller can change order status to received or cancelled
    public function getOrder($order_id) {
        $parameters = [
            ":order_id" => $order_id,
        ];
        $this->dao->get($parameters, "order");
    }
}
