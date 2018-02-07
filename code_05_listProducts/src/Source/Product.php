<?php

namespace Source;

class Product
{
    private  $db;

    /**
     * Product constructor.
     * @param IConn $db
     */
    public function __construct(\IConn $db)
    {
        $this->db = $db->connect();
    }

    /**
     * @return array
     */
    public function lists()
    {
        $query = "Select * from products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
       return $list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }
}