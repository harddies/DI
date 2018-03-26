<?php
/**
 * Student.php.
 * User: Ronnie
 * Date: 2018/03/27
 * Time: 00:01
 */

namespace models\implement;

use models\interfaces\IModel;

class Student implements IModel
{
    public function getName($name)
    {
        // TODO: Implement getName() method.
        return $name;
    }

    public function getRows()
    {
        // TODO: Implement getRow() method.
        return [];
    }

    public function getRow()
    {
        // TODO: Implement getRow() method.
        return [];
    }

    public function getCount()
    {
        // TODO: Implement getCount() method.
        return 0;
    }

    public function getStudentDetail()
    {
        return [];
    }
}