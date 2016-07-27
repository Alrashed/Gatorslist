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
        // if we have POST data to create a new product entry
        if (isset($_GET["submit_search_product"])) {
            // do getAllProducts() in model/model.php
	$products = $this->model->getAllProducts($_GET["searchinput"], $_GET["category"]);
	}
	
        else if (isset($_GET["highprice"])) {
	$sorttype = "highprice";
	$products = $this->model->getAllSortedProducts($_GET["searchinput"], $sorttype);
        }

        else if (isset($_GET["lowprice"])) {
        $sorttype = "lowprice";
	$products = $this->model->getAllSortedProducts($_GET["searchinput"], $sorttype);
        }

        else if (isset($_GET["date"])) {
	$sorttype = "date";
        $products = $this->model->getAllSortedProducts($_GET["searchinput"], $sorttype);
        }

        else if (isset($_GET["submit_filter_price_product"])) {
        $products = $this->model->getAllFilterPriceProducts($_GET["searchinput"],$_GET["minprice"], $_GET["maxprice"]);
        }

        else if (isset($_GET["submit_condition_product"])) {
        $products = $this->model->getAllFilterConditionProducts($_GET["searchinput"],$_GET["itemcondition"]);	
        }


        // where to go after product has been added
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/product.php';
        require APP . 'view/_templates/footer.php';

    }

}
