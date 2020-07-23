<?php
class ProductModel extends Database
{
    #public variables here
    #__construct functon make connection to Database failure;
    function showList()
    {
        $qr = "SELECT * FROM product";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function getListByBrand($brand_id)
    {
        $qr = "SELECT * FROM product WHERE brand_id=$brand_id";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function getListByGender($cate_id)
    {
        $qr = "SELECT * FROM product WHERE cate_id=$cate_id";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function getProduct($id)
    {
        $qr = "SELECT * FROM product WHERE id=$id";
        $result = mysqli_query($this->con, $qr);
        return json_encode(mysqli_fetch_array($result));
    }

    function getProductByName($name)
    {
        $qr = "SELECT DISTINCT * FROM product WHERE name LIKE '%$name%'";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

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
}
