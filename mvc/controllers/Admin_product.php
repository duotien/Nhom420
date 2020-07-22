<?php
class Admin_product extends Controller
{
    function showDefault()
    {
        $this->getView("master-view-admin", [
            "Page" => "admin_product2"
        ]);
    }
};
