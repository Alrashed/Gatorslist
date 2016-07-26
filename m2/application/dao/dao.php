<?php
/**
 * Created by PhpStorm.
 * User: guoyiruan
 * Date: 7/13/16
 * Time: 10:21 PM
 */

class Dao {
    /**
     * @var null Database Connection
     */
    public $db = null;

    function __construct()
    {
        $this->openDatabaseConnection();
    }
    
    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        try {
            $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    // CRUD create read update and delete to database
    public function create($parameters, $target) {
        if ($target == "user") {
            $sql = "INSERT INTO user (Email, Password, Firstname, Lastname) VALUES (:email, :password, :firstname, :lastname)";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute($parameters)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        else if($target == "item"){
            echo"dao good";
            $seller_id = $parameters[":seller_id"];
            $title = $parameters[":title"];
            $description = $parameters[":description"];
            $price = $parameters[":price"];
            $condition = $parameters[":condition"];
            $postdate = $parameters[":date"];
            $category_Id =  $parameters[":category_Id"];
            $small_img =  $parameters[":small_img"];

            $sql1 ="INSERT INTO image (thumbnail) VALUES(LOAD_FILE('".$small_img."'))";
            echo $sql1;
            $query1 = $this->db->prepare($sql1);
            $query1->execute();
            try {
                if ($query1->execute()) {
                    $sql = "INSERT INTO product (Seller_id, Title, Description, Price, ItemCondition, Postdate, Category_Id,Image_id)
                    VALUES ('".$seller_id."','".$title."' , '".$description."', '".$price."', '".$condition."','".$postdate."' , '".$category_Id."','".$this->db->lastInsertId()."')";
                    echo $sql;
                    $query = $this->db->prepare($sql);
                    try {
                        if ($query->execute()) {
                            return true;
                        } else {
                            return false;
                        }
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }


        }
        else if ($target == "order") {
            $product_id = $parameters[":product_id"];
            $buyer_id = $parameters[":buyer_id"];
            $date = $parameters[":date"];
            $detail = $parameters[":detail"];
            $status = $parameters[":status"];

            $sql = "SELECT Price FROM product WHERE Product_id = '".$product_id."' ";
            $query = $this->db->prepare($sql);
            $query->execute();
            $price = $query->fetchAll();
//            echo $price[0];
            
            $sql1 ="INSERT INTO order (Product_id, Buyer_id, OrderDate, Detail,Price, Status) VALUES('".$product_id."', '".$buyer_id."', '".$date."', '".$detail."','".$price[0]."' '".$status."')";
            $query = $this->db->prepare($sql1);
            try {
                if ($query->execute()) {
                    return $query->fetchAll();
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

    }

    public function get($parameters, $target)
    {
        if ($target == "allUsers") {
            $sql = "SELECT User_id, Email, Firstname, Lastname FROM user";
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }

        else if ($target == "allProducts") {
            $keyword = array_shift($parameters);
            $sql = "SELECT i.thumbnail,p.Title,p.ItemCondition, p.Description, p.Price, p.Postdate FROM product p, image i  WHERE (i.Image_id = p. Image_id AND p.Title LIKE '%" . $keyword . "%') or (i.Image_id = p. Image_id AND Description LIKE '%." . $keyword . "%')";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    return $query->fetchAll();
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        else if ($target == "ProductsByCategory") {
            $keyword = $parameters[":searchinput"];
            $category =  $parameters[":category"];
            $sql = "SELECT * FROM product p1 WHERE p1.Category_Id = (SELECT pc.Category_id FROM productCategory pc WHERE pc.Category_name = '".$category."') AND (p1.Title LIKE '%".$keyword."%'OR p1.Description LIKE '%".$keyword."%')";

            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    return $query->fetchAll();
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        else if ($target == "item") {
            $pid = $parameters[":product_id"];
            $sql ="SELECT i.thumbnail, p.Seller_id, p.Title, p.Description, p.Price, p.ItemCondition, p.Postdate FROM product p,image i  WHERE p.Image_id = i.Image_id AND p.product_id = '".$pid."' ";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    return $query->fetchAll();
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        else if ($target == "order") {
            $order_id = $parameters[":order_id"];
            $sql ="SELECT *FROM order WHERE Order_id = '".$order_id."' ";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute()) {
                    return $query->fetchAll();
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function update($parameters, $target) {
        if ($target == "resetPrice") {
            $pid =  $parameters[":product_id"];
            $newprice =  $parameters[":newprice"];
            $sql = "UPDATE product SET Price = '".$newprice."' WHERE Product_id = '".$pid. "' ";
            try {
                if ($sql->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        else if ($target == "editStatus") {
            $order_id =  $parameters[":order_id"];
            $status =  $parameters[":status"];
            $sql = "UPDATE order SET Status = '".$status."' WHERE Order_id = '".$order_id. "'";
            try {
                if ($sql->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function delete ($parameters, $target) {
        if($target == "user") {
            $sql = "DELETE FROM user WHERE (User_id) = (:user_id)";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute($parameters)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        else if($target == "item") {
            $sql = "DELETE FROM product WHERE (Product_id) = (:product_id)";
            $query = $this->db->prepare($sql);
            try {
                if ($query->execute($parameters)) {
                    return true;
                } else {
                    return false;
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

    }
}
