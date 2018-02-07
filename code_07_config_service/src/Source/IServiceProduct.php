<?php
/**
 * Created by PhpStorm.
 * User: inama
 * Date: 07/02/2018
 * Time: 01:10
 */

namespace Source;


interface IServiceProduct
{
    public function all();
    public function save();
    public function update();
    public function delete();

}