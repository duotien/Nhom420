<?php
class Admin extends Controller
{
    public $AdminModel;
    public $ProductModel;
    public $UserModel;
    private $loggedin;

    function __construct()
    {
        $this->AdminModel = $this->getModel("AdminModel");
        $this->ProductModel = $this->getModel("ProductModel");
        $this->UserModel = $this->getModel("UserModel");
        $this->loggedin = false;
        if (isset($_SESSION["admin_user"]))
        {
            $this->loggedin = true;
        }
    }

    function showDefault()
    {
        if ($this->loggedin)
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

    function User()
    {
        if ($this->loggedin)
        {
            $customer_list = json_decode($this->UserModel->getListCustomerUser(), true);
            $admin_list = json_decode($this->AdminModel->getListAdminUser(), true);
            $this->getView("master-view-admin", [
                "Page" => "admin_user",
                "CustomerList" => $customer_list,
                "AdminList" => $admin_list
            ]);
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function EditUser()
    {
        if ($this->loggedin)
        {
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function EdittingUser()
    {
        if ($this->loggedin)
        {
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function RemoveUser()
    {
        if ($this->loggedin)
        {
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function Product()
    {
        if ($this->loggedin)
        {
            $product_array = json_decode($this->ProductModel->showList(), true);
            $brand_array = json_decode($this->ProductModel->listBrand(), true);
            $category_array = json_decode($this->ProductModel->listCategory(), true);

            $this->getView("master-view-admin", [
                "Page" => "admin_product2",
                "ProductArray" => $product_array,
                "BrandArray" => $brand_array,
                "CategoryArray" => $category_array
            ]);
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function AddProduct()
    {
        if ($this->loggedin)
        {
            $brand_list = json_decode($this->ProductModel->listBrand(), true);
            $category_list = json_decode($this->ProductModel->listCategory(), true);
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

                $result = false;
                if (!empty($name))
                {
                    $img_path = $this->uploadImage($_FILES);
                    $result = $this->AdminModel->addProduct($name, $brand_id, $cate_id, $price, $quantity, $img_path, $description);
                }
                return $result;
            }
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function EditProduct($id = 0)
    {
        if ($this->loggedin)
        {
            $brand_list = json_decode($this->ProductModel->listBrand(), true);
            $category_list = json_decode($this->ProductModel->listCategory(), true);
            $my_product = json_decode($this->ProductModel->getProduct($id), true);

            if (!$my_product)
            {
                header("Location: http://localhost/Nhom420/Admin/Product");
                return false;
            }

            $this->getView("master-view-1", [
                "Page" => "admin_edit",
                "BrandList" => $brand_list,
                "CategoryList" => $category_list,
                "SelectedProduct" => $my_product
            ]);
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function EdittingProduct($id = 0)
    {
        if ($this->loggedin)
        {
            $my_product = json_decode($this->ProductModel->getProduct($id), true);

            if (!$my_product)
            {
                header("Location: http://localhost/Nhom420/Admin/Product");
                return false;
            }
            $result = false;
            if (isset($_POST["btn_edit_product"]))
            {
                $name = $_POST["product-input"];
                $brand_id = $_POST["brand-input"];
                $cate_id = $_POST["cate-input"];
                $price = $_POST["price-input"];
                $quantity = $_POST["quantity-input"];
                $description = $_POST["description-input"];

                $img_path = $my_product["img_path"];

                if (!empty($name))
                {
                    $new_img_path = $this->uploadImage($_FILES);
                    if ($img_path != $new_img_path && $new_img_path != "images/product/placeHolder.jpg")
                    {
                        $img_path = $new_img_path;
                    }
                    $result = $this->AdminModel->editProduct($id, $name, $brand_id, $cate_id, $price, $quantity, $img_path, $description);
                }
            }
            header("Location: http://localhost/Nhom420/Admin/EditProduct/$id");
            return $result;
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function RemoveProduct($id = 0)
    {
        if ($this->loggedin)
        {
            if ($id == 0)
            {
                header("Location: http://localhost/Nhom420/Admin/Product");
            }
            $result = false;
            if (isset($_POST["btn-remove"]))
            {
                if ($this->AdminModel->removeProduct($id))
                {
                    $result = true;
                }
            }
            header("Location: http://localhost/Nhom420/Admin/Product");
            return $result;
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function Login()
    {
        if (isset($_SESSION["admin_user"]))
        {
            header("Location: http://localhost/Nhom420/Admin");
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
