<?php
class Contact extends Controller
{
    function showDefault()
    {
        $this->getView("master-view-1", [
            "Page" => "contact"
        ]);
    }
};
