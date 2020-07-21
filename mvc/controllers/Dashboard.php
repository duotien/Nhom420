<?php
class Dashboard extends Controller
{
    function showDefault()
    {
        $this->getView("master-view-admin", [
            "Page" => "admin_dashboard"
        ]);
    }
};
