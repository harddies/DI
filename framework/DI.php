<?php
/**
 * DI.php.
 * User: Ronnie
 * Date: 2018/01/31
 * Time: 00:11
 */

namespace framework;

class DI
{
    public static function createClass($className, $methodName = '', $return = true)
    {
        try
        {
            $obj = new \ReflectionClass($className);
            if ($obj->getConstructor() !== null)
            {
                $parameters = $obj->getConstructor()->getParameters();
                $args = [];
                foreach ($parameters as $parameter)
                {
                    $diClassName = $parameter->getClass()->name;
                    $subClass = self::createClass($diClassName);
                    if (!is_null($subClass))
                        $args[] = $subClass;
                }

                $class = $obj->newInstanceArgs($args);

                if (!empty($methodName))
                    $class->$methodName();

                if ($return)
                    return $class;
                else
                    return null;
            }
            else
            {
                return $obj->newInstance();
            }
        }
        catch (\Exception $ex)
        {
            die($ex->getMessage());
        }
    }
}