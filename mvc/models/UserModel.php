<?php
/* TO DO:
 * Thêm tài khoản mới
 *
 * 
*/

class UserModel extends Database
{
    #public variables here

    public function insertAccount($username, $password)
    {
        $qr = "INSERT INTO customer_account VALUES(null, '$username', '$password')";
        $result = mysqli_query($this->con, $qr);
        if ($result)
            return true;
        else
            return false;
    }   
}
