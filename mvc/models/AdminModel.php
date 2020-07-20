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
}
