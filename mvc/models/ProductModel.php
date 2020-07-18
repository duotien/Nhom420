<?php
/* TO DO:
 * Hiện list tất cả các sản phẩm
 *
 * 
*/

class ProductModel extends Database
{
    #public variables here
    #__construct functon make connection to Database failure;
    function showList()
    {
        $qr = "SELECT * FROM product";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function showListBrand($brand_id)
    {
        $qr = "SELECT * FROM product WHERE brand_id=$brand_id";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }
    
    function showListGender($cate_id)
    {
        $qr = "SELECT * FROM product WHERE cate_id=$cate_id";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while($row = mysqli_fetch_array($result))
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

    function search()
    {
        
    }
}