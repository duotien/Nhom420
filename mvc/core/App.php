<?php
/*file này dùng để tách chuỗi lấy từ url:
 *
 * 1. Controller
 * 2. Action
 * 3. Parameters[]
 *
*/
class App
{
    #Home/ShowDefault/1/2/3/4
    protected $controller = "Home";
    protected $action = "showDefault";
    protected $params = [];

    function __construct()
    {
        $arr = $this->urlProcess();
        // Controller
        if (isset($arr[0]))
        {
            if (file_exists("./mvc/controllers/" . $arr[0] . ".php"))
            {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        // Action
        if (isset($arr[1]))
        {
            if (method_exists($this->controller, $arr[1]))
            {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // Params
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function urlProcess()
    {
        if (isset($_GET["url"]))
        {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
