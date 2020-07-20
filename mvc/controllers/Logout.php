<?php
class Logout extends Controller
{
    public $LogoutModel;

    function __construct()
    {
        $this->LogoutModel = $this->getModel("UserModel");
    }

    function showDefault()
    {
        header("location: http://localhost/Nhom420");
        $this->LogoutModel->logout();
    }
};
