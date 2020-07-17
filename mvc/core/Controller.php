<?php
class Controller
{
    public function getModel($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        return new $model;
    }

    public function getView($view, $data = [])
    {
        require_once "./mvc/views/" . $view . ".php";
    }
}
