<?php
include_once("config/parameters.php");

class Router
{

    static $Routes =
    [
        "/Products" => ["Product","index"]
    ];

    public static function GetView($viewName)
    {
        $viewUrl = parse_url($viewName);

        $view = null;
        if(isset(self::$Routes[$viewUrl['path']]))
            $view = self::$Routes[$viewUrl['path']];   

        $query = [];
        if (isset($viewUrl['query'])) 
        {
            parse_str($viewUrl['query'], $query);
        }
        

        return [$view, $query];
    }

    public static function GetPage($view, $query = [])
    {
        var_dump($query);
        
        if($view == null)
        {
            include_once("./view/404.php");
            return;
        }

        if(!isset($view[0]))
        {
            echo "Controller dosent exist.";
        }
        else
        {
            $controller_name = $view[0] . "Controller";
            include_once("controller/$controller_name.php");

            if(class_exists($controller_name))
            {
                $controllerClass = new $controller_name();

                if(isset($view[1]) && method_exists($controllerClass,$view[1]))
                {
                    $action = $view[1];
                }
                else
                {
                    $action = default_action;
                }

                $controllerClass->$action();
            }
            else
            {
                echo "Controller name dosent exist. $controller_name";
            }
        }
    }
}

?>