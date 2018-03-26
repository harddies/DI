<?php
/**
 * SchoolService.php.
 * User: Ronnie
 * Date: 2018/03/27
 * Time: 00:10
 */

namespace services;


use models\implement\Student;
use models\implement\Teacher;

class SchoolService
{
    private $_student;
    private $_teacher;

    public function __construct(Student $student, Teacher $teacher)
    {
        $this->_student = $student;
        $this->_teacher = $teacher;
    }

    public function test()
    {
        echo '<pre>';print_r($this->_student->getName('std1'));exit;
    }
}