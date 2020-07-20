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
        //echo "Controller Login";
    }

    function error($type)
    {
        $message = "error";
        switch ($type)
        {
            case 'wrong':
                $message = "Wrong username/password";
                break;
            case 'empty':
                $message = "Please enter your username/password";
                break;
            default:
                $message = "error";
                break;
        }
        $this->getView("master-view-login", [
            "error" => true,
            "message" => $message
        ]);
    }

    function Login()
    {
        if (isset($_POST["btn_login"]))
        {
            if (empty($_POST["username"]) || empty($_POST["pass"]))
            {
                //header("location: http://localhost/Nhom420/Login/error/empty");
                echo "Empty username or password";
            }
            else
            {
                $username = $_POST["username"];
                $password = $_POST["pass"];
                $hash = json_decode($this->LoginModel->getUserPasswordHash($username))[0];
                echo $username."<br>".$password."<br>";
                echo $hash;
                //$pass = password_verify($pass, $hash);

                $con = mysqli_connect("localhost", "root", "", "quanligiaydep") or die("Connect failed!");
                $qry = "Select * from customer_account where username = '$username' and pass = '$password'";
                $result = mysqli_query($con, $qry);
                
                /*
                if (mysqli_num_rows($result) > 0)
                {
                    session_start();
                    $_SESSION["user"] = $username;
                    header("location: http://localhost/Nhom420");
                }
                else
                {
                    header("location: http://localhost/Nhom420/Login/error/wrong");
                }
                */
            }
        }
    }
};
