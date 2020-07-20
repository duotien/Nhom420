<?php
class Admin extends Controller
{
    public $AdminModel;

    function __construct()
    {
        $this->AdminModel = $this->getModel("AdminModel");
    }

    function showDefault()
    {
        echo "Admin controller
        <br><a href='./Product'>Product</a>
        <br><a href='./Add'>Add</a>
        <br>";
        print_r(json_decode($this->AdminModel->listBrand(), true));
    }

    function Product()
    {
        $this->getView("master-view-1", [
            "Page" => "admin_product"
        ]);
    }

    function Add()
    {
        $brand_list = json_decode($this->AdminModel->listBrand(), true);
        $this->getView("master-view-1", [
            "Page" => "admin_add",
            "BrandList" => $brand_list,

        ]);
    }
};
