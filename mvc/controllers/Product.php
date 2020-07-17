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
        echo "Controller-Product";
    }

    function showList()
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
        //echo "Sản phẩm có id: $id";
        $this->getView("master-view-1", [
            "Page" => "productdetail",
            "id" => $id
        ]);
    }

    function sayHello()
    {
        echo "Hello World!";
    }
}
