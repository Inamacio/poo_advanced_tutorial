<?php


class Product
{
    private  $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function lists()
    {
        $query = "Select * from products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
       return $list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }
}