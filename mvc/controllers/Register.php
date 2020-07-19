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

    function create($username, $password)
    {
        $result = $this->RegisterModel->insertAccount($username, $password);
        if($result)
            echo "Successfully";
        else
            echo "Failed";
    }
};