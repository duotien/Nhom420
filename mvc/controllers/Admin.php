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
        <br><a href='./Admin/Product'>Product</a>
        <br><a href='./Admin/Add'>Add</a>
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

            echo $name."<br>".$brand_id."<br>".$cate_id."<br>".$price."<br>".$quantity."<br>".$description."<br>";
            /*

            $target_dir = __DIR__ . "/../../public/images/";
            $target_file = $target_dir . basename($_FILES["file-input"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            echo "<br>" . $target_dir . "<br>" . $target_file . "<br>" . $imageFileType . "<br>";
            if (($_FILES["file-input"]["error"] == UPLOAD_ERR_NO_FILE)) echo "NO FILE WAS UPLOADED <br>";
            // Check if image file is a actual image or fake image
            if (!($_FILES["file-input"]["error"] == UPLOAD_ERR_NO_FILE))
            {
                $check = getimagesize($_FILES["file-input"]["tmp_name"]);
                if ($check !== false)
                {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                }
                else
                {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }


            // Check if file already exists
            if (file_exists($target_file))
            {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["file-input"]["size"] > 1500000)
            {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            )
            {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }


            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0)
            {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            }
            else
            {
                if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target_file))
                {
                    echo "The file " . basename($_FILES["file-input"]["name"]) . " has been uploaded.";
                }
                else
                {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            */
        }
    }
};
