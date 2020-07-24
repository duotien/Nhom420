<?php
class Admin extends Controller
{
    public $AdminModel;
    public $ProductModel;
    public $UserModel;
    private $loggedin;
    private $isadmin;

    function __construct()
    {
        $this->AdminModel = $this->getModel("AdminModel");
        $this->ProductModel = $this->getModel("ProductModel");
        $this->UserModel = $this->getModel("UserModel");
        $this->loggedin = false;
        $this->isadmin = false;
        if (isset($_SESSION["admin_user"]))
        {
            $this->loggedin = true;
            $this->isadmin = $_SESSION["admin_user"]["type"];
        }
    }

    function showDefault()
    {
        if ($this->loggedin)
        {
            $this->getView("master-view-admin", [
                "ActiveMenu" => "Dashboard",
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
        if ($this->loggedin && $this->isadmin)
        {
            $customer_list = json_decode($this->UserModel->getListCustomerUser(), true);
            $admin_list = json_decode($this->AdminModel->getListAdminUser(), true);
            $this->getView("master-view-admin", [
                "Page" => "admin_user",
                "ActiveMenu" => "User",
                "CustomerList" => $customer_list,
                "AdminList" => $admin_list
            ]);
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function EditUser($id)
    {
        if ($this->loggedin && $this->isadmin)
        {
            $selected_user = json_decode($this->UserModel->getCustomerUserById($id), true);
            if (!$selected_user)
            {
                header("Location: http://localhost/Nhom420/Admin/User");
            }
            else
            {
                $this->getView("master-view-1", [
                    "Page" => "admin_editcustomer",
                    "ActiveMenu" => "User",
                    "SelectedCustomer" => $selected_user
                ]);
            }
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function EdittingUser($id = 0)
    {
        if ($this->loggedin && $this->isadmin)
        {
            $selected_user = $this->UserModel->getCustomerUserById($id);
            if (!$selected_user)
            {
                header("Location: http://localhost/Nhom420/Admin/User");
                return false;
            }
            else
            {
                $result = false;
                if (isset($_POST["btn_edit_customer"]))
                {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone_number = $_POST["phone_number"];

                    if (!empty($name) && !empty($email) && !empty($phone_number))
                    {
                        $result = $this->UserModel->editCustomerUser($id, $email, $name, $phone_number);
                    }
                }
                header("Location: http://localhost/Nhom420/Admin/EditUser/$id");
                return $result;
            }
        }
        else
        {
            header("Location: http://localhost/Nhom420/Admin/Login");
        }
    }

    function RemoveUser()
    {
        if ($this->loggedin && $this->isadmin)
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
            $product_list = json_decode($this->ProductModel->showList(), true);
            $brand_list = json_decode($this->ProductModel->listBrand(), true);
            $category_list = json_decode($this->ProductModel->listCategory(), true);

            $this->getView("master-view-admin", [
                "Page" => "admin_product2",
                "ActiveMenu" => "Product",
                "ProductList" => $product_list,
                "BrandList" => $brand_list,
                "CategoryList" => $category_list
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
                header("Location: http://localhost/Nhom420/Admin/Product");
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
            }
            else
            {
                $this->getView("master-view-1", [
                    "Page" => "admin_edit",
                    "ActiveMenu" => "Product",
                    "BrandList" => $brand_list,
                    "CategoryList" => $category_list,
                    "SelectedProduct" => $my_product
                ]);
            }
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

                    if ($result = $this->AdminModel->login($username, $password))
                    {
                        $_SESSION["admin_user"] = json_decode($result, true);
                        header("Location: http://localhost/Nhom420/Admin");
                        return true;
                    }
                }
            }
            return false;
        }
    }

    function Logout()
    {
        header("Location: http://localhost/Nhom420/Admin/Login");
        $this->AdminModel->logout();
    }
};

/*
//old add product
    function AddProduct()
    {
        if ($this->loggedin)
        {
            $brand_list = json_decode($this->ProductModel->listBrand(), true);
            $category_list = json_decode($this->ProductModel->listCategory(), true);
            $this->getView("master-view-1", [
                "Page" => "admin_add",
                "ActiveMenu" => "Product",
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
*/