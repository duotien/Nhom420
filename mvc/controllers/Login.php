<?php
class Login extends Controller
{
    public $LoginModel;

    function __construct()
    {
        $this->LoginModel = $this->getModel("UserModel");
    }

    function showDefault()
    {
        $this->getView("master-view-login", []);
    }

    function Empty()
    {
        $this->getView("master-view-login", [
            "error" => true,
            "message" => "Please enter your username/password"
        ]);
    }

    function Wrong()
    {
        $this->getView("master-view-login", [
            "error" => true,
            "message" => "Wrong username/password"
        ]);
    }

    function Login()
    {
        if (isset($_POST["btn_login"]))
        {
            if (empty($_POST["username"]) || empty($_POST["pass"]))
            {
                header("location: http://localhost/Nhom420/Login/Empty");
                return false;
            }
            else
            {
                $username = $_POST["username"];
                $password = $_POST["pass"];

                if ($this->LoginModel->login($username, $password))
                {
                    header("Location: http://localhost/Nhom420");
                    return true;
                }
                else
                {
                    header("location: http://localhost/Nhom420/Login/Wrong");
                    return false;
                }
            }
        }
        header("Location: http://localhost/Nhom420/Login");
        return false;
    }
};
