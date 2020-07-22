<?php
class AdminModel extends Database
{
    #public variables here
    function listBrand()
    {
        $qr = "SELECT * FROM `brand`";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function listCategory()
    {
        $qr = "SELECT * FROM `category`";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function addProduct($name, $brand_id, $cate_id, $price, $quantity, $img_path, $description)
    {
        $qr = "INSERT INTO `product` VALUES
        (null,'$name',$brand_id,$cate_id,$price,$quantity,'$img_path','$description')";
        $result = false;
        if (mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return $result;
    }

    function getProduct($id)
    {
        $qr = "SELECT * FROM product WHERE id=$id";
        $result = mysqli_query($this->con, $qr);
        return json_encode(mysqli_fetch_array($result));
    }

    function editProduct()
    {
        
    }
}
