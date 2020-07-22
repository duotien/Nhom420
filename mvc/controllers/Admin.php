<?php
class Admin extends Controller
{
    public $AdminModel;
    function __construct()
    {
        $this->AdminModel = $this->getModel("AdminModel");
        $this->ProductModel = $this->getModel("ProductModel");
    }

    function showDefault()
    {
        echo "Admin controller
        <br><a href='./Admin/Product'>Product</a>
        <br><a href='./Admin/Add'>Add</a>
        <br>";
        print_r(json_decode($this->AdminModel->listBrand(), true));
    }

    function Product()
    {
        $this->getView("master-view-admin", [
            "Page" => "admin_product2"
        ]);
    }

    function Add()
    {
        $brand_list = json_decode($this->AdminModel->listBrand(), true);
        $category_list = json_decode($this->AdminModel->listCategory(), true);
        $this->getView("master-view-1", [
            "Page" => "admin_add",
            "BrandList" => $brand_list,
            "CategoryList" => $category_list
        ]);
        if (isset($_POST["btn_add_product"]))
        {
            $name = $_POST["product-input"];
            $brand_id = $_POST["brand-input"];
            $cate_id = $_POST["cate-input"];
            $price = $_POST["price-input"];
            $quantity = $_POST["quantity-input"];
            $description = $_POST["description-input"];

            //echo empty($name)."<br>".$brand_id."<br>".$cate_id."<br>".$price."<br>".$quantity."<br>".$description."<br>";

            $result = false;
            if (!empty($name))
            {
                $img_path = $this->uploadImage($_FILES);
                $result = $this->AdminModel->addProduct($name, $brand_id, $cate_id, $price, $quantity, $img_path, $description);
            }
            //echo "<br><br>$result";
            return $result;
        }
    }

    function Edit($id)
    {
        $brand_list = json_decode($this->AdminModel->listBrand(), true);
        $category_list = json_decode($this->AdminModel->listCategory(), true);
        $my_product = json_decode($this->AdminModel->getProduct($id), true);
        $this->getView("master-view-1", [
            "Page" => "admin_edit",
            "BrandList" => $brand_list,
            "CategoryList" => $category_list,
            "SelectedProduct" => $my_product
        ]);
    }
};
