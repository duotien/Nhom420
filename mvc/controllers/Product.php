<?php
class Product extends Controller
{
    public $productmodel;

    function __construct()
    {
        $this->productmodel = $this->getModel("ProductModel");
    }

    function showDefault()
    {
        //$decodedArray = json_decode($encodedArray, true): true => return $decodedArray instead of stdClass
        $my_array = json_decode($this->productmodel->showList(), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "Array" => $my_array
        ]);
    }

    function Detail($id)
    {
        $my_product = json_decode($this->productmodel->getProduct($id), true);

        //echo "Sản phẩm có id: $id";
        $this->getView("master-view-1", [
            "Page" => "productdetail",
            "Product" => $my_product
        ]);
    }

    function sayHello()
    {
        echo "Hello World!";
    }
}
