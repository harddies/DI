<?php
/**
 * DI.php.
 * User: Ronnie
 * Date: 2018/01/31
 * Time: 00:11
 */

$controllerName = 'SchoolService';
$actionName = 'test';

$obj = new ReflectionClass($controllerName);
if ($obj->hasMethod('__construct'))
{
    $parameters = $obj->getMethod('__construct')->getParameters();
    $args = [];
    foreach ($parameters as $parameter)
    {
        $diClassName = $parameter->getClass()->name;
        $args[] = new $diClassName();
    }

    $controller = $obj->newInstanceArgs($args);
    $controller->$actionName();
}

spl_autoload_register(function ($class) {

});