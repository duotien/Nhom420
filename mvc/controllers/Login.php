<?php
class Login extends Controller
{
    function showDefault()
    {
        $this->getView("master-view-login", []);
        //echo "Controller Login";
    }

    function error($type)
    {
        $message = "error";
        switch ($type) {
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
};
