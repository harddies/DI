<?php
/**
 * IModel.php.
 * User: Ronnie
 * Date: 2018/03/26
 * Time: 23:58
 */

namespace models\interfaces;

interface IModel
{
    /**
     * @param string $name
     * @return string
     */
    public function getName($name);

    /**
     * @return array
     */
    public function getRows();

    /**
     * @return array
     */
    public function getRow();

    /**
     * @return int
     */
    public function getCount();
}