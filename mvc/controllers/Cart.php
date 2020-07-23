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
        if (isset($_POST["add_to_cart"]))
        {
            $id = $_POST["hidden_id"];
            $my_product = json_decode($this->ProductModel->getProduct($id), true);
            $existed = false;
            
            if (isset($_SESSION["shopping_cart"]))
            {
                foreach($_SESSION["shopping_cart"] as $key)
                {
                    if($key["id"] == $id)
                    {
                        $existed = true;
                    }
                }
                if(!$existed)
                {
                    $_SESSION["shopping_cart_count"] += 1;
                    $count = $_SESSION["shopping_cart_count"];
                    $_SESSION["shopping_cart"][$count] = $my_product;
                }
            }
            else
            {
                $_SESSION["shopping_cart"][0] = $my_product;
                $_SESSION["shopping_cart_count"] = 0;
            }
            $this->getView("master-view-1", [
                "Page" => "cart",
                "ShoppingCart" => $_SESSION["shopping_cart"]
            ]);
        }
        else if (isset($_SESSION["shopping_cart"]))
        {
            $this->getView("master-view-1", [
                "Page" => "cart",
                "ShoppingCart" => $_SESSION["shopping_cart"]
            ]);
        }
        else
        {
            $this->getView("master-view-1", [
                "Page" => "cart",
            ]);
        }
    }
    function Remove($index)
    {
        if (isset($_SESSION["shopping_cart"][$index]))
        {
            array_splice($_SESSION["shopping_cart"],$index,1); 
            $_SESSION["shopping_cart_count"]--;
        }
        header("Location: http://localhost/Nhom420/Cart");
    }
};
