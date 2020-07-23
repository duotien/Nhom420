<?php
class AdminModel extends Database
{
    #public variables here

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

    function editProduct($id, $name, $brand_id, $cate_id, $price, $quantity, $img_path, $description)
    {
        $qr = "UPDATE `product` SET
            `name`='$name',
            `brand_id`=$brand_id,
            `cate_id`=$cate_id,
            `price`=$price,
            `quantity`=$quantity,
            `img_path`='$img_path',
            `description`='$description'
            WHERE `id`=$id";
        $result = false;
        if (mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return $result;
    }

    function removeProduct($id)
    {
        $qr = "DELETE FROM `product` WHERE `id`=$id";
        $result = false;
        if (mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return $result;
    }

    function getListAdminUser()
    {
        $qr = "SELECT * FROM `admin_account`";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function getAdminUserById($id)
    {
        $qr = "SELECT * FROM `admin_account` WHERE id=$id";
        $result = mysqli_query($this->con, $qr);
        return json_encode(mysqli_fetch_array($result));
    }

    function login($username, $password)
    {
        $qr = "SELECT * FROM `admin_account` WHERE username='$username' AND pass='$password'";
        $result = mysqli_query($this->con, $qr);
        $result = mysqli_fetch_array($result);
        if ($result > 0)
        {
            //$_SESSION["admin_user"] = json_encode(mysqli_fetch_row($result));
            return json_encode($result);
            //return true;
        }
        return false;
    }
    
    function logout()
    {
        if(isset($_SESSION["admin_user"]))
        {
            unset($_SESSION["admin_user"]);
        }
    }
}
