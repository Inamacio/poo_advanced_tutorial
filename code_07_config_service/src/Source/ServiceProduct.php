<?php
/**
 * Created by PhpStorm.
 * User: inama
 * Date: 07/02/2018
 * Time: 01:15
 */

namespace Source;


class ServiceProduct implements IServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function all()
    {
        $query = "Select * from products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {
        //implements save sql
    }

    public function update()
    {
        //implements update sql
    }

    public function delete()
    {
        //implements delete sql
    }
}