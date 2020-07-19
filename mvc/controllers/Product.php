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

    function Men()
    {
        $my_array = json_decode($this->productmodel->showListGender(1), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "Array" => $my_array
        ]);
    }

    function Women()
    {
        $my_array = json_decode($this->productmodel->showListGender(2), true);
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
        $my_array = json_decode($this->productmodel->getProductByName($keyword), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "Array" => $my_array
        ]);
    }
}