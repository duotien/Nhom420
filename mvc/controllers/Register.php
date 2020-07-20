<?php
class Register extends Controller
{
    public $RegisterModel;

    function __construct()
    {
        $this->RegisterModel = $this->getModel("UserModel");
    }

    function showDefault()
    {
        $this->getView("master-view-register", []);
        //echo "Controller Register";
    }

    function create()
    {
        if (isset($_POST["btn_signup"]) && isset($_POST["agree-term"]))
        {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $re_password = $_POST["re_password"];
            $email = $_POST["email"];

            if ($password != $re_password)
            {
                echo "Password don't match, please try again";
            }
            else
            {
                $password = password_hash($password, PASSWORD_DEFAULT);

                echo "hello";
                echo "<br>" . $username . "<br>" . $password . "<br>" . $re_password . "<br>" . $email . "<br>" . $_POST["agree-term"];

                $result = $this->RegisterModel->insertAccount($username, $password, $email);
                    echo $result;

                
            }
            
        }
        else
        {
            header("Location: http://localhost/Nhom420/Register");
        }
    }
};
