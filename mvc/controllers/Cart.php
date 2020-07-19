<?php
class Cart extends Controller
{
    function showDefault()
    {
        $this->getView("master-view-1", [
            "Page" => "cart"
        ]);
    }
};
