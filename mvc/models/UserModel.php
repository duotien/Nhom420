<?php
/* TO DO:
 * Thêm tài khoản mới
 *
 * 
*/

class UserModel extends Database
{
    #public variables here

    function insertAccount($username, $password, $email, $name, $phone_number)
    {
        $qr = "INSERT INTO customer_account VALUES(null, '$username', '$password', '$email', '$name', '$phone_number')";
        $result = false;
        if (mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return $result;
    }

    function getListCustomerUser()
    {
        $qr = "SELECT * FROM `customer_account`";
        $result = mysqli_query($this->con, $qr);
        $my_array = array();
        while ($row = mysqli_fetch_array($result))
        {
            $my_array[] = $row;
        }
        return json_encode($my_array);
    }

    function getCustomerUserById($id)
    {
        $qr = "SELECT * FROM `customer_account` WHERE id=$id";
        $result = mysqli_query($this->con, $qr);
        return json_encode(mysqli_fetch_array($result));
    }

    function validateUsername($username)
    {
        $qr = "SELECT `username` FROM customer_account WHERE username='$username'";
        $result = mysqli_query($this->con, $qr);
        $valid = true;
        if (mysqli_fetch_row($result) > 0)
        {
            $valid = false;
        }
        return $valid;
    }

    function validateUserEmail($email)
    {
        $qr = "SELECT `email` FROM customer_account WHERE email='$email'";
        $result = mysqli_query($this->con, $qr);
        $valid = true;
        if (mysqli_fetch_row($result) > 0)
        {
            $valid = false;
        }
        return $valid;
    }

    function validateUserPhoneNumber($phone_number)
    {
        $qr = "SELECT `phone_number` FROM customer_account WHERE phone_number='$phone_number'";
        $result = mysqli_query($this->con, $qr);
        $valid = true;
        if (mysqli_fetch_row($result) > 0)
        {
            $valid = false;
        }
        return $valid;
    }

    function getUserPasswordHash($username)
    {
        $qr = "SELECT `pass` FROM customer_account WHERE username='$username'";
        $result = mysqli_query($this->con, $qr);
        return json_encode(mysqli_fetch_row($result));
    }

    function login($username, $password)
    {
        $hash = json_decode($this->getUserPasswordHash($username));
        if (isset($hash))
        {
            if (password_verify($password, $hash[0]))
            {
                $_SESSION["user"] = $username;
                return true;
            }
        }
        return false;
    }

    function logout()
    {
        unset($_SESSION["user"]);
    }
}
