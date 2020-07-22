<?php
class Cart extends Controller
{
    public $ProductModel;

    function __construct()
    {
        $this->ProductModel = $this->getModel("ProductModel");
    }

    function showDefault()
    {
        if (isset($_POST["add_to_cart"])) {
            $id = $_POST["hidden_id"];
            $my_product = json_decode($this->ProductModel->getProduct($id), true);

        
            if (isset($_SESSION["shopping_cart"])) {
                $_SESSION["shopping_cart_count"] += 1;
                $count = $_SESSION["shopping_cart_count"];
                $_SESSION["shopping_cart"][$count] = $my_product;
            }
            else 
            {
                $_SESSION["shopping_cart"][0] = $my_product;
                $_SESSION["shopping_cart_count"] = 0;
            }
            print_r($_SESSION["shopping_cart"]);
            $this->getView("master-view-1", [
                "Page" => "cart",
                "ShoppingCart" => $_SESSION["shopping_cart"]
            ]);
        }
        $this->getView("master-view-1", [
            "Page" => "cart",
        ]);
    }
};
