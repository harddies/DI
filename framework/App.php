<?php
/**
 * Created by PhpStorm.
 * User: Ronnie
 * Date: 2018/03/27
 * Time: 09:35
 */

namespace framework;


class App
{
    public $app;

    private function __construct()
    {

    }

    public static function router($controller, $action)
    {
        $controllerName = 'controllers\\' . ucfirst($controller) . 'Controller';
        $actionName = 'action' . ucfirst($action);

        DI::createClass($controllerName, $actionName, false);
    }
}