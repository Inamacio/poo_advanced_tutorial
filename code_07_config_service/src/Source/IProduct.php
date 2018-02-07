<?php
/**
 * Created by PhpStorm.
 * User: inama
 * Date: 07/02/2018
 * Time: 01:23
 */

namespace Source;


interface IProduct
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getDesc();
    public function setDesc($desc);
}