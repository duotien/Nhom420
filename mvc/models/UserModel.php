<?php
/* TO DO:
 * Thêm tài khoản mới
 *
 * 
*/

class UserModel extends Database
{
    #public variables here

    function insertAccount($username, $password, $email)
    {
        $qr = "INSERT INTO customer_account VALUES(null, '$username', '$password', '$email')";
        $result = false;
        if (mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return json_encode($result);
    }

    function getUserPasswordHash($username)
    {
        $qr = "SELECT `pass` FROM customer_account WHERE username='$username'";
        echo $qr."<br>";
        $result = mysqli_query($this->con, $qr);
        return json_encode(mysqli_fetch_row($result));
    }

    function login($username, $password)
    {

    }

    function logout()
    {
        unset($_SESSION["user"]);
    }
}
