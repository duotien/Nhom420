<?php
class Controller
{
    public function getModel($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        return new $model;
    }

    public function getView($view, $data = [])
    {
        require_once "./mvc/views/" . $view . ".php";
    }

    public function uploadImage($file = [])
    {
        $img_path = "images/product/";
        $target_dir = __DIR__ . "/../../public/";
        $target_dir .= $img_path;
        $target_file = $target_dir . basename($file["file-input"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;
        $img_path .= basename($file["file-input"]["name"]);

        if (($file["file-input"]["error"] == UPLOAD_ERR_NO_FILE))
        {
            return $img_path = "images/product/placeHolder.jpg";
        }
        else
        {
            // Check if image file is a actual image or fake image
            $check = getimagesize($file["file-input"]["tmp_name"]);
            if ($check !== false)
            {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            }
            else
            {
                //echo "File is not an image.";
                $uploadOk = 0;
            }
            // Check file size
            if ($file["file-input"]["size"] > 1500000)
            {
                //echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
            {
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file))
            {
                //echo "file already exists.";
                return $img_path;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0)
            {
                //echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                $img_path = "images/product/placeHolder.jpg";
            }
            else
            {
                if (move_uploaded_file($file["file-input"]["tmp_name"], $target_file))
                {
                    echo "The file " . basename($file["file-input"]["name"]) . " has been uploaded.";
                    return $img_path;
                }
                else
                {
                    //echo "Sorry, there was an error uploading your file.";
                    $img_path = "images/product/placeHolder.jpg";
                }
            }
        }
        return $img_path;
    }
}
