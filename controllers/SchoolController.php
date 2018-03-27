<?php
/**
 * Created by PhpStorm.
 * User: Ronnie
 * Date: 2018/03/27
 * Time: 09:24
 */

namespace controllers;

class SchoolController
{
    private $_schoolService;

    public function __construct(\services\SchoolService $schoolService)
    {
        $this->_schoolService = $schoolService;
    }

    public function actionIndex()
    {
        $this->_schoolService->test();
    }
}