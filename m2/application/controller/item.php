<?php
include 'resize.php';
/**
 * Class item
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Item extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://../register/index
     */
    public function index()
    {
        // getting all users
//        $users = $this->model->getAllUsers();

        // load views. within the views we can echo out $users
        require APP . 'view/_templates/header.php';
        require APP . 'view/item/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: createItem -- add product with image
     */
    public function createItem()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $target_file = $target_dir . $_POST["Title"] . '.' . $imageFileType;
        $filename = $_POST["Title"]. '.' . $imageFileType;
        

        // if we have POST data to create a new user entry
        if (isset($_POST["submit"])) {
//            if(checkLogin()) {
//                $seller_id = getcurrentUser();
            //This is the directory where images will be saved
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
//                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
//                echo "File is not an image.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
//                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    
                    $src = "./uploads/" . $_POST["Title"] . '.' . $imageFileType;
                    $img = new imaging;
                    $img->set_img($src);
                    $img->set_quality(80);
                    $small_img = str_ireplace($img->format, 'small.' . $img->format, $src);
                    $img->set_size(200);
                    $img->save_img($small_img);
                    $img->clear_cache();

                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $date = date("Y-m-d H:i:s");
            $seller_id = "13";// example 
            
            $this->model->createItem($seller_id,$_POST["Title"], $_POST["Description"], $_POST["Price"], $_POST["Condition"],$date, $_POST["Category_Id"],$small_img);

//                header('location: ' . URL . 'item/index');
//            } else {
//                echo "Please register";
//                header('location: ' . URL . 'register/index');
//            }
            
        } 
        
    }

    public function ResetPrice($product_id, $newprice)
    {
        //check the userid
        
        
        if (isset($product_id)) {
            // do deleteUser() in model/model.php
            $this->model->editItem($product_id,$newprice);
        }

        // where to go after user has been deleted
//        header('location: ' . URL . 'item/index');
    }

    public function deleteItem($product_id)
    {
        // check the the userid if the userid == seller's id in DB execute, else return

        // if we have an id of a user that should be deleted
        if (isset($product_id)) {
            // do deleteUser() in model/model.php
            $this->model->deleteItem($product_id);
        }

        // where to go after user has been deleted
        header('location: ' . URL . 'item/index');
    }

    public function getItem($product_id)
    {
        // check the userid

        // if we have an id of a user that should be deleted
        if (isset($product_id)) {
            // do deleteUser() in model/model.php
            $this->model->getItem($product_id);
        }

        // where to go after user has been deleted
        header('location: ' . URL . 'item/index');
    }
    
}
