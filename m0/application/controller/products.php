<?php

/**
 * Class products
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class products extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // getting all songs and amount of songs

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function product()
    {
        if (isset($_POST["submit_search_product"])) {

        // getting all songs and amount of songs
        $products = $this->model->searchProducts();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/product.php';
        require APP . 'view/_templates/footer.php';
         }
    }



    public function searchProducts()
    {
//        // if we have POST data to create a new song entry
//        if (isset($_POST["submit_search_product"])) {
//            // do addSong() in model/model.php
//            $products = $this->model->getAllProducts($_POST["searchinput"]);
//        }
//
//        // where to go after song has been added
//        require APP . 'view/_templates/header.php';
//        require APP . 'view/products/product.php';
//        require APP . 'view/_templates/footer.php';


        // if we have POST data to create a new user entry
        if (isset($_POST["submit_search_product"])) {
            // do createUser() in model/model.php
            $products = $this->model->searchProducts($_POST["searchinput"], $_POST["category"]);

        }
        // where to go after user has been added
        header('location: ' . URL . 'product/product');
    }


}
?>