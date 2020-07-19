<?php
class Logout extends Controller
{
    function showDefault()
    {
        header("location: http://localhost/Nhom420");
        unset($_SESSION["user"]);
    }
};