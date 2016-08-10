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
class Products extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://../products/index
     */
    public function index()
    {

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function searchProducts()
    {
        $categories = $this->model->getProductCategory();

        // if we have POST data to create a new product entry
        if (isset($_GET["submit_search_product"])) {
            // do getAllProducts() in model/model.php
            $products = $this->model->getAllProducts($_GET["searchinput"], $_GET["category"]);
        } else if (isset($_GET["highprice"])) {

            $sortType = "highprice";

            if (($_GET["itemcondition"] != "") && ($_GET["minprice"] != "")) {
                $filterType = "both";
                $filterInput = ($_GET["itemcondition"]);
                $secondFilterInput = ($_GET["minprice"]);
                $thirdFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput, $thirdFilterInput);
            } else if (isset($_GET["itemcondition"]) && ($_GET["itemcondition"] != "")) {
                $filterInput = ($_GET["itemcondition"]);
                $filterType = "condition";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            } else if (isset($_GET["minprice"]) && ($_GET["minprice"] != "")) {
                $filterType = "price";
                $filterInput = ($_GET["minprice"]);
                $secondFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput);
            } else {
                $filterType = "";
                $filterInput = "";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            }
        } else if (isset($_GET["lowprice"])) {

            $sortType = "lowprice";

            if (($_GET["itemcondition"] != "") && ($_GET["minprice"] != "")) {
                $filterType = "both";
                $filterInput = ($_GET["itemcondition"]);
                $secondFilterInput = ($_GET["minprice"]);
                $thirdFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput, $thirdFilterInput);
            } else if (isset($_GET["itemcondition"]) && ($_GET["itemcondition"] != "")) {
                $filterInput = ($_GET["itemcondition"]);
                $filterType = "condition";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            } else if (isset($_GET["minprice"]) && ($_GET["minprice"] != "")) {
                $filterType = "price";
                $filterInput = ($_GET["minprice"]);
                $secondFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput);
            } else {
                $filterType = "";
                $filterInput = "";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            }
        } else if (isset($_GET["date"])) {
            $sortType = "date";

            if (($_GET["itemcondition"] != "") && ($_GET["minprice"] != "")) {
                $filterType = "both";
                $filterInput = ($_GET["itemcondition"]);
                $secondFilterInput = ($_GET["minprice"]);
                $thirdFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput, $thirdFilterInput);
            } else if (isset($_GET["itemcondition"]) && ($_GET["itemcondition"] != "")) {
                $filterInput = ($_GET["itemcondition"]);
                $filterType = "condition";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            } else if (isset($_GET["minprice"]) && ($_GET["minprice"] != "")) {
                $filterType = "price";
                $filterInput = ($_GET["minprice"]);
                $secondFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput);
            } else {
                $filterType = "";
                $filterInput = "";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            }
        } else if (isset($_GET["submit_filter_price_product"])) {

            if ($_GET["itemcondition"] != "") {
                $filterType = "both";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["itemcondition"], $_GET["minprice"], $_GET["maxprice"]);
            } else {
                $filterType = "price";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["minprice"], $_GET["maxprice"]);
            }
        } else if (isset($_GET["submit_condition_product"])) {

            if ($_GET["itemcondition"] == "") {
                if ($_GET["minprice"] != "") {
                    $filterType = "price";
                    $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["minprice"], $_GET["maxprice"]);
                } else
                    $products = $this->model->getAllProducts($_GET["searchinput"], $_GET["category"]);
            } else if ($_GET["minprice"] != "" && $_GET["itemcondition"] != "") {
                $filterType = "both";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["itemcondition"], $_GET["minprice"], $_GET["maxprice"]);
            } else {
                $filterType = "condition";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["itemcondition"]);
            }
        } else if (isset($_GET["reset_filter"])) {
            $products = $this->model->getAllProducts($_GET["searchinput"], $_GET["category"]);
        }
        // where to go after product has been added
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/product.php';
        require APP . 'view/_templates/footer.php';

    }

    public function getProductCategory()
    {

        $categories = $this->model->getProductCategory();
        foreach ($categories as $category) {
            echo $category->Category_name;
        }


        // where to go after product has been added
//        require APP . 'view/_templates/header.php';
//        require APP . 'view/products/index.php';
//        require APP . 'view/_templates/footer.php';

    }

}
