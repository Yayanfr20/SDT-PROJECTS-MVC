<?php
class TestDB
{
    private $table = 'testing';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getTextTesting()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
