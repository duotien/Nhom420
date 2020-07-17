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
        $rows = mysqli_query($this->con, $qr);
        $my_array = array();
        while($row = mysqli_fetch_array($rows))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }
}