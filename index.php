<?php
/**
 * 入口文件
 * User: Ronnie
 * Date: 2018/03/27
 * Time: 09:25
 */

spl_autoload_register(function ($class) {
    $path = dirname(__FILE__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (!file_exists($path))
        throw new Exception('Not found class name ' . $class . "\n");

    require_once $path;
});


$controller = $argv[1];
$action = $argv[2];

\framework\App::router($controller, $action);