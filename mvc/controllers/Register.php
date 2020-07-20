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

    function Processing()
    {
        $error_message = "Failed to create an account";
        $result = false;
        if (isset($_POST["btn_signup"]) && isset($_POST["agree-term"]))
        {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $re_password = $_POST["re_password"];
            $email = $_POST["email"];

            if (!$this->RegisterModel->validateUsername($username))
            {
                $error_message = "This username has already been used";
            }
            else if (!$this->RegisterModel->validateUserEmail($email))
            {
                $error_message = "This email has been used, please use another email";
            }
            else if ($password != $re_password)
            {
                $error_message = "Password don't match, please try again";
            }
            else
            {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $result = $this->RegisterModel->insertAccount($username, $password, $email);
            }
        }
        $this->getView("master-view-register", [
            "message" => $error_message,
            "result" => $result
        ]);
    }
};
