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
        if (isset($_SESSION["admin_user"]))
        {
            $this->getView("master-view-admin", [
                "Page" => "admin_dashboard"
            ]);
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function Product()
    {
        $this->getView("master-view-admin", [
            "Page" => "admin_product2"
        ]);
    }

    function User()
    {
        $this->getView("master-view-admin", [
            "Page" => "admin_user"
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

    function Login()
    {
        if (isset($_SESSION["admin_user"]))
        {
            header("Location: http://localhost/Nhom420/Admin");
            //print_r($_SESSION["admin_user"]);
        }
        
        else
        {
            $this->getView("master-view-admin-login", []);

            if (isset($_POST["btn_login"]))
            {
                if (empty($_POST["username"]) || empty($_POST["pass"]))
                {
                    return false;
                }
                else
                {
                    $username = $_POST["username"];
                    $password = $_POST["pass"];

                    if ($this->AdminModel->login($username, $password))
                    {
                        header("Location: http://localhost/Nhom420/Admin");
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            }
            return false;
        }
    }

    function Logout()
    {
        $this->getView("master-view-admin-login", []);
        $this->AdminModel->logout();
    }
};
