<?php
class Admin_user extends Controller
{
    function showDefault()
    {
        $this->getView("master-view-admin", [
            "Page" => "admin_user"
        ]);
    }
};
