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
        $my_array = $this->productmodel->showList();
        print_r(json_decode($my_array));
    }

    function sayHello()
    {
        echo "Hello World!";
    }
}
