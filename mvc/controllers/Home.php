<?php
class Home extends Controller
{
    function showDefault()
    {
        $this->getView("master-view-1", [
            "Page" => "Home"
        ]);
    }
};