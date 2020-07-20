<?php
class Product extends Controller
{
    public $ProductModel;

    function __construct()
    {
        $this->ProductModel = $this->getModel("ProductModel");
    }

    function showDefault()
    {
        //$decodedArray = json_decode($encodedArray, true): true => return $decodedArray instead of stdClass
        $my_array = json_decode($this->ProductModel->showList(), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "Array" => $my_array
        ]);
    }

    function Detail($id)
    {
        $my_product = json_decode($this->ProductModel->getProduct($id), true);
        $this->getView("master-view-1", [
            "Page" => "productdetail",
            "Product" => $my_product
        ]);
    }

    function Men()
    {
        $my_array = json_decode($this->ProductModel->getListByGender(1), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "Array" => $my_array
        ]);
    }

    function Women()
    {
        $my_array = json_decode($this->ProductModel->getListByGender(2), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "Array" => $my_array
        ]);
    }

    function sayHello()
    {
        echo "Hello World!";
    }

    function search($keyword = "")
    {
        $my_array = json_decode($this->ProductModel->getProductByName($keyword), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "Array" => $my_array
        ]);
    }
}
