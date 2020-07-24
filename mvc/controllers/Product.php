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
        $product_array = json_decode($this->ProductModel->showList(), true);
        $brand_array = json_decode($this->ProductModel->listBrand(), true);
        $this->getView("master-view-1", [
            "Page" => "category",
            "ProductArray" => $product_array,
            "BrandList" => $brand_array
        ]);
    }

    function Detail($id)
    {
        $my_product = json_decode($this->ProductModel->getProduct($id), true);
        $this->getView("master-view-1", [
            "Page" => "productdetail",
            "SelectedProduct" => $my_product
        ]);
    }

    function Men()
    {
        $product_array = json_decode($this->ProductModel->getListByGender(1), true);
        $brand_array = json_decode($this->ProductModel->listBrand(), true);

        $this->getView("master-view-1", [
            "Page" => "category",
            "ProductArray" => $product_array,
            "BrandList" => $brand_array
        ]);
    }

    function Women()
    {
        $product_array = json_decode($this->ProductModel->getListByGender(2), true);
        $brand_array = json_decode($this->ProductModel->listBrand(), true);

        $this->getView("master-view-1", [
            "Page" => "category",
            "ProductArray" => $product_array,
            "BrandList" => $brand_array
        ]);
    }

    function search($keyword = "")
    {
        $product_array = json_decode($this->ProductModel->getProductByName($keyword), true);
        $brand_array = json_decode($this->ProductModel->listBrand(), true);

        $this->getView("master-view-1", [
            "Page" => "category",
            "ProductArray" => $product_array,
            "BrandList" => $brand_array
        ]);
    }

    function filter()
    {
        $brand = [];
        if(isset($_POST["btn_filter"]))
        {
            $brand = $_POST["brand"];
            print_r($brand);
        }
        $product_array = json_decode($this->ProductModel->getListByBrand($brand), true);
        $brand_array = json_decode($this->ProductModel->listBrand(), true);

        $this->getView("master-view-1", [
            "Page" => "category",
            "ProductArray" => $product_array,
            "BrandList" => $brand_array
        ]);
    }
}
